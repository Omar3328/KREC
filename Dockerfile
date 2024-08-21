FROM php:8.1-fpm

# Instalar extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    curl \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd intl zip \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb

# Descargar e instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar los archivos del proyecto
COPY . /var/www/html

# Cambiar el directorio de trabajo
WORKDIR /var/www/html

# Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Exponer el puerto 9000
EXPOSE 9000
