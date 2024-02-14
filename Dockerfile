FROM php:8.3.2-apache

COPY /src /var/www/html

EXPOSE 80

# docker run -p 3000:80 -d -v $(pwd)/src:/var/www/html/ zapateria-php:2.0