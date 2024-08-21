# Usa una imagen oficial de PHP con soporte para Apache
FROM php:8.1-apache

# Instala las dependencias del sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libxml2-dev \
    libonig-dev \
    && docker-php-ext-configure gd \
    --with-freetype \
    --with-jpeg \
    && docker-php-ext-install gd \
    zip \
    intl \
    pdo_mysql \
    && docker-php-ext-enable opcache

# Copia el código fuente al contenedor
COPY . /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Instala las dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Expon el puerto 80
EXPOSE 80

# Ejecuta el servidor Apache
CMD ["apache2-foreground"]
