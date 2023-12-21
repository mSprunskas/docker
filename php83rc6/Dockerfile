FROM php:8.3.0RC6-fpm-alpine3.18

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

WORKDIR /home/app/src
