FROM ubuntu:latest
LABEL authors="38063"


# Installs extra libraries
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip


# Installs Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /home/php-pro










