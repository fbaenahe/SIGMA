FROM php:8.1.5-apache
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y libmariadb-dev && apt-get install -y nano
RUN docker-php-ext-install mysqli
