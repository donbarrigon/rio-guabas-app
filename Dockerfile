FROM dunglas/frankenphp

# 1. Crear directorio de trabajo
WORKDIR /app

# 2. Copiar archivos del proyecto
COPY . .

# 3. Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 5. Instalar dependencias de Node y compilar frontend
RUN npm install && npm run build

# 6. Permisos de Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# 7. Cachear configuración de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 8. Exponer puertos
EXPOSE 80 443

# 9. Iniciar con FrankenPHP
CMD ["frankenphp", "php-server", "-r", "public/"]



