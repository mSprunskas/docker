FROM php:7.4-cli

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN docker-php-ext-install bcmath

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Create separate user for app
RUN useradd -ms /bin/bash app

WORKDIR /home/app/src
