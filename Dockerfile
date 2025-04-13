FROM php:8.3-fpm

RUN apt-get update && apt-get install -y \
    git curl libpq-dev unzip zip libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
