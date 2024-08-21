# Usa una imagen base de PHP
FROM php:8.1-fpm

# Instala dependencias del sistema y extensiones de PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev libjpeg62-turbo-dev \
    libgmp-dev libicu-dev libzip-dev unzip git libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip intl bcmath \
    && docker-php-ext-enable opcache

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia el contenido del proyecto al contenedor
COPY . .

# Instala las dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Expone el puerto 9000 para PHP-FPM
EXPOSE 9000

# Inicia el servidor PHP-FPM
CMD ["php-fpm"]
