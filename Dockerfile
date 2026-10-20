FROM node:22-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm install

COPY . .
RUN npm run build


# ==========================================
# Stage 2: Laravel + PHP + Apache
# ==========================================
FROM php:8.3-apache

# Reset Apache MPM modules and enable only prefork
RUN rm -f /etc/apache2/mods-enabled/mpm_event.* \
          /etc/apache2/mods-enabled/mpm_worker.* \
          /etc/apache2/mods-enabled/mpm_prefork.* \
    && a2enmod mpm_prefork \
    && ls -l /etc/apache2/mods-enabled/mpm*

# Install PHP extensions and system dependencies
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

# Copy application files
COPY . .

# Install production dependencies
RUN composer install \
    --no-dev \
    --prefer-dist \
    --optimize-autoloader \
    --no-interaction

# Copy compiled frontend assets
COPY --from=frontend /app/public/build ./public/build

# Configure Apache to serve Laravel's public directory
RUN sed -i 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf \
    && a2enmod rewrite headers \
    && printf '\n<Directory /var/www/html/public>\n    AllowOverride All\n    Require all granted\n</Directory>\n' \
       >> /etc/apache2/apache2.conf

# Prepare Laravel storage and cache directories
RUN mkdir -p \
       storage/framework/cache/data \
       storage/framework/sessions \
       storage/framework/views \
       storage/logs \
       bootstrap/cache \
    && chown -R www-data:www-data storage bootstrap/cache

# Copy the startup script
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Railway supplies the PORT environment variable
EXPOSE 10000

CMD ["docker-entrypoint.sh"]
