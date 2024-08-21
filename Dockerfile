FROM php:8.1-fpm

# Instalar extensiones PHP necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd zip pdo pdo_mysql

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar el directorio de trabajo
WORKDIR /var/www

# Copiar el código fuente
COPY . .

# Instalar dependencias
RUN composer install --no-dev --optimize-autoloader

# Exponer el puerto en el que PHP-FPM escucha
EXPOSE 9000

CMD ["php-fpm"]
