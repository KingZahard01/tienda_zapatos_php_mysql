FROM php:8.3.2-apache

# Enable Apache modules
RUN a2enmod rewrite
# Install any extensions you need
RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY /src /var/www/html

# EXPOSE 80

# docker run -p 3000:80 -d -v $(pwd)/src:/var/www/html/ zapateria-php:2.0