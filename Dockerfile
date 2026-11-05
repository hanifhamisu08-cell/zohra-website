FROM php:8.3-apache

RUN docker-php-ext-install pdo_mysql \
    && a2enmod rewrite headers

WORKDIR /var/www/html
COPY --chown=www-data:www-data *.php *.css *.js ./
COPY --chown=www-data:www-data Assets/ ./Assets/

EXPOSE 80
