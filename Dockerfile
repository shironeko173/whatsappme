# Stage 1: Builder
FROM php:8.0-fpm AS builder

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    # Tambahkan ini untuk MySQL:
    default-mysql-client \  
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl gd \
    && docker-php-ext-enable pdo_mysql

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy composer files first (optimize layer caching)
COPY composer.json composer.lock ./

# Install dependencies (no dev)
RUN composer install --no-dev --no-scripts --no-autoloader --optimize-autoloader

# Copy all files
COPY . .

# Copy .env.example ke .env (jika tidak ada)
RUN if [ ! -f .env ]; then \
        cp .env.example .env && \
        if [ -z "$(grep 'APP_KEY=' .env)" ]; then \
            php artisan key:generate --force --no-interaction; \
        fi; \
    fi

# Fix permissions
RUN chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

# Optimize Laravel
RUN composer dump-autoload --optimize \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Stage 2: Production
FROM php:8.0-fpm

COPY --from=builder /var/www/html /var/www/html

# Set working directory
WORKDIR /var/www/html

# Run artisan commands (ensure environment is available)
CMD ["sh", "-c", "php artisan config:cache && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000"]