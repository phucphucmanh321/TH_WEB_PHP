# Bước 1: Build project
FROM php:8.1-cli AS build

# Cài đặt Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /src
COPY . .
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev && docker-php-ext-configure gd --with-freetype --with-jpeg && docker-php-ext-install gd
RUN composer install --no-dev --optimize-autoloader

# Bước 2: Runtime
FROM php:8.1-apache AS runtime
WORKDIR /var/www/html
COPY --from=build /src /var/www/html
EXPOSE 80
CMD ["apache2-foreground"]
