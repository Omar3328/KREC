# Usa una imagen base de PHP
FROM php:8.2-fpm

# Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libjpeg62-turbo-dev \
    libicu-dev g++ libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && docker-php-ext-install intl

# Establece el directorio de trabajo
WORKDIR /var/www

# Copia los archivos del proyecto al contenedor
COPY . .

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
