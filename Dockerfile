# ---------- Build Stage ----------
FROM node:20 AS node_builder

WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# ---------- PHP Stage ----------
FROM php:8.2-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get install -y \
    nginx \
    sqlite3 \
    libsqlite3-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    && docker-php-ext-install pdo pdo_sqlite zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar código
COPY . .

# Copiar build do Vite
COPY --from=node_builder /app/public/build ./public/build

# Instalar dependências PHP
RUN composer install --no-dev --optimize-autoloader

# Criar diretórios necessários
RUN mkdir -p storage bootstrap/cache database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database

# Nginx config
COPY docker/nginx.conf /etc/nginx/sites-available/default

EXPOSE 80

RUN php artisan storage:link
CMD service nginx start && php-fpm