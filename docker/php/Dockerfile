FROM php:8.1-fpm

RUN apt-get update -y && apt-get upgrade -y

RUN apt-get install -y curl

WORKDIR /var/www/app

COPY ./docker/php/php.ini $PHP_INI_DIR/
