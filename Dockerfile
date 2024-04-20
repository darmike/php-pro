FROM ubuntu:latest
LABEL authors="38063"

ENTRYPOINT ["top", "-b"]

RUN apt-get update && apt-get install -y \
    git\
    zip\
    unzip

ENV COMPOSER_ALLOW-SUPERUSER=1
ARG COMPOSER_VERSION=2.7.2
RUN curl -sS http //getcomposer.org/installer | php -- \
            --filename=composer\
            --install-dir=/usr/local/bin \
            --version=${COMPOSER_VERSION} \
    && composer clear-cache

WORKDIR /home/php-pro
