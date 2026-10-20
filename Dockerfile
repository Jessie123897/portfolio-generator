FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./

RUN npm install

COPY . .

RUN npm run build


# ==========================================
# STAGE 2: PHP + APACHE + LARAVEL
# ==========================================
FROM php:8.3-apache

# Diagnose Apache MPM configuration
RUN echo "=== Apache MPM modules enabled ===" \
    && ls -la /etc/apache2/mods-enabled/ \
    && echo "=== Apache MPM LoadModule directives ===" \
    && grep -RniE '^[[:space:]]*LoadModule[[:space:]]+mpm_' \
       /etc/apache2/apache2.conf \
       /etc/apache2/conf-enabled \
       /etc/apache2/mods-enabled \
       /etc/apache2/sites-enabled \
       2>/dev/null || true

# Install required system dependencies and PHP extensions
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpq-dev \
    libcurl4-openssl-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j"$(nproc)" \
       pdo_pgsql \
       mbstring \
       bcmath \
       exif \
       pcntl \
       gd \
       zip \
       curl \
       opcache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Laravel application directory
WORKDIR /var/www/html

# Copy application source
COPY . .

# Install production dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# Copy compiled Vite assets
COPY --from=frontend /app/public/build ./public/build

# Configure Apache document root and Laravel access
RUN sed -i 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite headers \
    && printf '\n<Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n</Directory>\n' \
       >> /etc/apache2/apache2.conf

# Create Laravel writable directories
RUN mkdir -p \
       storage/framework/cache/data \
       storage/framework/sessions \
       storage/framework/views \
       storage/logs \
       bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Add container startup script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Railway port
EXPOSE 10000

CMD ["docker-entrypoint.sh"]
