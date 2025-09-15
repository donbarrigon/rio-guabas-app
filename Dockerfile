FROM dunglas/frankenphp

# 1. Instalar dependencias necesarias para Composer
RUN apk add --no-cache \
    bash \
    git \
    curl \
    zip \
    unzip \
    libzip-dev \
    oniguruma-dev \
    libpng-dev \
    autoconf \
    gcc \
    g++ \
    make \
    icu-dev \
    nodejs \
    npm \
    postgresql-dev \
    && docker-php-ext-install pdo_pgsql mbstring zip exif pcntl bcmath gd intl

# 2. Instalar Composer desde la imagen oficial
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 3. Crear directorio de trabajo
WORKDIR /app

# 4. Copiar archivos del proyecto
COPY . .

# 5. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 6. Instalar dependencias de Node y compilar frontend
RUN npm ci && npm run build

# 7. Permisos de Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# 8. Cachear configuración de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 9. Exponer puertos
EXPOSE 80 443

# 10. Iniciar con FrankenPHP
CMD ["frankenphp", "php-server", "-r", "public/"]
