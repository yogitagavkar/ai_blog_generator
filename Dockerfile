FROM php:8.4-cli

# System packages
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libpq-dev \
    libzip-dev \
    nodejs \
    npm

# PHP extensions
RUN docker-php-ext-install pdo pdo_pgsql zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Working directory
WORKDIR /var/www

# Copy dependency files first (better caching)
COPY composer.json composer.lock ./
RUN composer install --optimize-autoloader

COPY package.json package-lock.json ./
RUN npm ci

# Copy app
COPY . .

# Build frontend assets
RUN npm run build

# Fix Laravel permissions
RUN chmod -R 775 storage bootstrap/cache

# Render port
EXPOSE 10000

# Start app (NO seed for now)
CMD sh -c "php artisan migrate --force && php artisan optimize && php artisan serve --host=0.0.0.0 --port=${PORT:-10000}"