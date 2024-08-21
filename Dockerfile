# Usa una imagen base de PHP con PHP-FPM
FROM php:8.1-fpm

# Instala las extensiones necesarias
RUN docker-php-ext-install pdo pdo_mysql

# Copia el código de tu aplicación al contenedor
COPY . /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 9000 para PHP-FPM
EXPOSE 9000

# Inicia PHP-FPM
CMD ["php-fpm"]
