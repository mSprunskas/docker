FROM php:8.4-fpm-alpine

RUN apk add --update \
    autoconf \
    g++ \
    make \
    linux-headers \
    curl

# Add the PHP extension installer script
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

# Install Xdebug via PECL and enable it
RUN pecl install xdebug && docker-php-ext-enable xdebug

# Make the installer executable and install extensions
RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions xdebug bcmath

# Copy Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create a non-root user for the app
RUN adduser -D -s /bin/sh app

WORKDIR /home/app/src
