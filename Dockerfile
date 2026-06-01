# ============================================================
# Stage 1 — Node.js: install npm deps and build Vite assets
# ============================================================
FROM node:20-alpine AS node-builder

WORKDIR /app

# Copy only the files needed for npm install + build
COPY package.json ./
RUN npm install

# Copy source files required by Vite (config, resources, public)
COPY vite.config.js ./
COPY resources/ ./resources/
COPY public/ ./public/

RUN npm run build

# ============================================================
# Stage 2 — PHP: install Composer deps and run the application
# ============================================================
FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    curl \
    git \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libsqlite3-dev \
    sqlite3 \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        mbstring \
        zip \
        bcmath \
        xml \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy composer files first for layer caching
COPY composer.json composer.lock ./

# Install PHP dependencies (no dev, optimised autoloader)
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction \
    --no-progress

# Copy the rest of the application source
COPY . .

# Copy compiled Vite assets from the node-builder stage
COPY --from=node-builder /app/public/build ./public/build

# Set up the environment file
RUN cp .env.example .env \
    && sed -i 's/APP_ENV=local/APP_ENV=production/' .env \
    && sed -i 's/APP_DEBUG=true/APP_DEBUG=false/' .env

# Create the SQLite database file
RUN mkdir -p database \
    && touch database/database.sqlite

# Ensure all required directories exist
RUN mkdir -p storage/framework/{sessions,views,cache} \
    && mkdir -p storage/logs \
    && mkdir -p bootstrap/cache

# Generate application key, run migrations, and optimise config
RUN php artisan key:generate --force \
    && php artisan migrate --force \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Set correct ownership and permissions after all build-time writes
RUN chmod -R 775 storage bootstrap/cache database \
    && chown -R www-data:www-data storage bootstrap/cache database

EXPOSE 8000

# Run as www-data for security
USER www-data

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
