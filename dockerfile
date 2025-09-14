# Imagen base con PHP 8.2 y FPM
FROM php:8.2-fpm

# Instalar dependencias del sistema
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    redis-tools \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Instalar extensión de Redis
RUN pecl install redis \
    && docker-php-ext-enable redis

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Establecer directorio de trabajo
WORKDIR /var/www

# Copiar archivos de Laravel
COPY . .

# Instalar dependencias de PHP/Laravel
RUN composer install --no-dev --optimize-autoloader

# Permisos para el almacenamiento y caché
RUN chown -R www-data:www-data storage bootstrap/cache

# Exponer el puerto de PHP-FPM
EXPOSE 9000

# Comando por defecto
CMD ["php-fpm"]
