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

# 5. Instalar FrankenPHP
RUN curl -sSL https://frankenphp.dev/install.sh | sh && \
    mv frankenphp /usr/local/bin/

# 6. Crear directorio de trabajo
WORKDIR /var/www/html

# 7. Copiar archivos de Laravel
COPY . .

# 8. Instalar dependencias de PHP/Laravel
RUN composer install --no-dev --optimize-autoloader

# 9. Instalar dependencias de Node (Tailwind / Vite / Mix)
RUN npm install
RUN npm run build

# 10. Permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# 11. Ejecutar migraciones y cache de Laravel durante build
RUN php artisan migrate --force
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

# 12. Exponer puerto que usará FrankenPHP
EXPOSE 10000

# 13. Comando por defecto: arrancar FrankenPHP
CMD ["sh", "-c", "frankenphp php-server -r public/ -p $PORT"]



