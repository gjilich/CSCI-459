FROM php:apache

WORKDIR /var/www/html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

COPY index.php/ /var/www/html/