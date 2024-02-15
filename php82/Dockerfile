FROM php:8.2-cli

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN apt-get install -y libzip-dev zip \
&& docker-php-ext-install zip

RUN docker-php-ext-install bcmath

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Create separate user for app
RUN useradd -ms /bin/bash app

WORKDIR /home/app/src
