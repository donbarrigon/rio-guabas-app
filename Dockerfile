FROM dunglas/frankenphp

# 1. Crear directorio de trabajo
WORKDIR /app

# 2. Copiar archivos del proyecto
COPY . .

# 3. Instalar dependencias de PHP
RUN composer install --no-dev --optimize-autoloader

# 4. Instalar dependencias de Node y compilar frontend (si usas Vite/Livewire/etc.)
RUN npm install && npm run build

# 5. Permisos de Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache

# 6. Cachear configuración de Laravel
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# 7. Exponer puertos
EXPOSE 80 443

# 8. Iniciar con FrankenPHP
CMD ["frankenphp", "php-server", "-r", "public/"]


