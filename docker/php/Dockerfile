FROM php:7.4-fpm

WORKDIR /var/www/docker-start

RUN apt-get -y update \
    && apt-get -y install \
    git 

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer --version

# EXPOSE 9000