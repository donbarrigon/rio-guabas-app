# 1. Imagen base con PHP y extensiones necesarias
FROM php:8.2-fpm-alpine

# 2. Instalar dependencias del sistema
RUN apk add --no-cache \
    bash \
    git \
    curl \
    libzip-dev \
    zip \
    unzip \
    oniguruma-dev \
    libpng-dev \
    autoconf \
    gcc \
    g++ \
    make \
    shadow \
    icu-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd intl

# 3. Instalar extensión de Redis
RUN pecl install redis && docker-php-ext-enable redis

# 4. Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 5. Crear directorio de trabajo
WORKDIR /var/www/html

# 6. Copiar archivos de Laravel
COPY . .

# 7. Instalar dependencias de PHP/Laravel
RUN composer install --no-dev --optimize-autoloader

# 8. Instalar dependencias de Node (para Livewire / Mix / Vite)
RUN npm install
RUN npm run build

# 9. Permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Exponer puerto (Render usa 10000 por defecto para web services, pero se puede configurar)
EXPOSE 10000

# 11. Comando por defecto para ejecutar PHP-FPM
CMD ["php-fpm"]

