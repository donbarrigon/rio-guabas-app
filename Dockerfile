FROM dunglas/frankenphp

# 1. Instalar extensiones necesarias
RUN install-php-extensions \
    pdo_pgsql \
    redis \
    gd \
    intl \
    zip \
    opcache \
    bcmath \
    mbstring \
    exif \
    pcntl

# 2. Instalar utilidades necesarias para composer
## RUN apk add --no-cache git unzip curl nodejs npm

# 3. Instalar Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Crear directorio de trabajo
WORKDIR /app

# 5. Copiar archivos del proyecto
COPY . .

# 6. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 7. Instalar dependencias de Node y compilar frontend (Vite)
RUN npm ci && npm run build

# 8. Permisos de Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# 9. Cachear configuración de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 10. Exponer puertos
EXPOSE 80 443

# 11. Iniciar con FrankenPHP
CMD ["frankenphp", "php-server", "-r", "public/"]
