FROM php:7.1-apache
RUN apt-get update
RUN docker-php-ext-install mysqli
COPY index.php index.php
