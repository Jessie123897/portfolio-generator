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

# Disable all MPM modules, then enable only prefork
RUN for module in mpm_event mpm_worker mpm_prefork; do \
        a2dismod "$module" 2>/dev/null || true; \
    done \
    && rm -f /etc/apache2/mods-enabled/mpm_event.* \
              /etc/apache2/mods-enabled/mpm_worker.* \
              /etc/apache2/mods-enabled/mpm_prefork.* \
    && a2enmod mpm_prefork \
    && echo "=== Enabled MPM modules ===" \
    && ls -l /etc/apache2/mods-enabled/mpm*

# Install system dependencies and PHP extensions
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

# Set Laravel working directory
WORKDIR /var/www/html

# Copy application source code
COPY . .

# Install production dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# Copy compiled Vite assets
COPY --from=frontend /app/public/build ./public/build

# Configure Apache document root
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

# Copy startup script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Railway application port
EXPOSE 10000

CMD ["docker-entrypoint.sh"]
