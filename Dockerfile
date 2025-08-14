# Stage 1: Build
FROM php:8.0-fpm AS builder

WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy hanya yang dibutuhkan untuk build
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copy semua file project
COPY . .

# Stage 2: Runtime
FROM php:8.0-fpm

COPY --from=builder /var/www/html /var/www/html

# Set permission
RUN chown -R www-data:www-data /var/www/html/storage

# Optimasi Laravel
RUN php artisan config:cache && \
    php artisan route:cache && \
    php artisan view:cache

# Jalankan aplikasi
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]