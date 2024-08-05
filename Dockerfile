# Menggunakan image PHP dengan Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Instal dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo pdo_mysql

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy seluruh file proyek Laravel ke container
COPY . .

# Instal dependensi Laravel
RUN composer install --no-scripts --no-autoloader

# Salin konfigurasi virtual host Apache
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

# Enable mod_rewrite
RUN a2enmod rewrite

# Salin environment variables
COPY .env.example .env

# Generate autoload files
RUN composer dump-autoload

# Generate application key
RUN php artisan key:generate

# Setting permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
