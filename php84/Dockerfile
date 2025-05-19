FROM php:8.4-fpm-alpine

RUN apk add --update \
    autoconf \
    g++ \
    make \
    linux-headers \
    curl

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions xdebug

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create separate user for app
RUN adduser -D -s /bin/sh app

WORKDIR /home/app/src
