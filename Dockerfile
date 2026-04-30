FROM php:8.4-fpm

# Install system dependencies + Node.js
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libpq-dev \
    libzip-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy application code
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader

# Install frontend dependencies
RUN npm ci

# Build frontend assets
RUN npm run build

# Expose application port
EXPOSE 10000

# Start application
CMD php artisan migrate --force; \
    php artisan db:seed --force; \
    php artisan optimize; \
    php artisan serve --host=0.0.0.0 --port=$PORT