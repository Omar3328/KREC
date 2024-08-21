# Usa la imagen oficial de PHP
FROM php:8.1-fpm

# Instala dependencias
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libonig-dev libxml2-dev git unzip

# Instala extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd

# Configura el directorio de trabajo
WORKDIR /var/www

# Copia los archivos del proyecto
COPY . .

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Instala las dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto en el que Laravel escuchará
EXPOSE 10000

# Comando para iniciar la aplicación
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
