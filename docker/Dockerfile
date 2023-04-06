FROM php:8.1.17-fpm

ARG UID=1000

RUN apt-get update \
    && apt-get install -y \
        apt-utils \
    && apt-get install -y \
        libpq-dev libzip-dev libicu-dev \
        curl wget nano \
        sudo cron zip unzip\
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl \
    && docker-php-ext-install -j$(nproc) zip

RUN groupadd -g "$UID" app \
    && useradd -g "$UID" -u "$UID" -d /home/app -s /bin/bash app \
    && usermod -aG sudo,www-data app \
    && echo "app ALL=(ALL) NOPASSWD: ALL" >> /etc/sudoers

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN mkdir -p /home/app/.composer \
    && chown -R app:app /home/app

USER app
WORKDIR /var/www/html
