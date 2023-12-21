FROM php:8.2-cli

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Create separate user for app
RUN useradd -ms /bin/bash app

WORKDIR /home/app/src
