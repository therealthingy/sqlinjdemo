FROM php:5.5-apache


COPY public_html /var/www/html/


# Install mysql driver for php
RUN docker-php-ext-install pdo_mysql mysql mysqli


# Fix permissions (otherwise 403 error)
RUN chown -R www-data:www-data /var/www/html/


EXPOSE 80
