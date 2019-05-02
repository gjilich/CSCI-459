FROM php:apache

# Install the mysql interface
WORKDIR /var/www/html
RUN docker-php-ext-install pdo_mysql && docker-php-ext-enable pdo_mysql
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Copy the web application into the web root directory
COPY ./ /var/www/html/
