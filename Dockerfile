FROM php:8.1-apache

#Intalar dependencias necesrias para postgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_pgsql

#Copiar contenido de toda la app en mi contendor
COPY . /var/www/html/

#Expone el puerto 80 
EXPOSE 80

