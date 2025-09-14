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

# 3. Instalar extensión de Redis (opcional)
RUN pecl install redis && docker-php-ext-enable redis

# 4. Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 5. Crear directorio de trabajo
WORKDIR /var/www/html

# 6. Copiar archivos del proyecto
COPY . .

# 7. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 8. Instalar dependencias de Node y compilar frontend (si usas Vite/Livewire/etc.)
RUN npm install && npm run build

# 9. Permisos de Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 10. Cachear configuración de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 11. Exponer puerto (ejemplo)
EXPOSE 8000

# 12. Comando de inicio (solo para desarrollo, en producción se recomienda Nginx o un reverse proxy)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
