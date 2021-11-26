FROM php:7.4.23-cli
RUN docker-php-ext-install pdo_mysql
WORKDIR /var/www/html
