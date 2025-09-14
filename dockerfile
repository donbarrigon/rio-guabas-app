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
    postgresql-dev \
    && docker-php-ext-install pdo_pgsql mbstring zip exif pcntl bcmath gd intl

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

# 10. Ejecutar migraciones y cache de Laravel durante build
RUN php artisan migrate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# 11. Exponer puerto (opcional)
EXPOSE 10000

# 12. Comando por defecto para Render: usar PHP built-in server
CMD ["sh", "-c", "php -S 0.0.0.0:$PORT -t public"]


