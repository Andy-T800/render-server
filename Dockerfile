# Use official PHP + Apache image
FROM php:8.2-apache

# Copy your PHP files to Apache's root directory
COPY . /var/www/html/

# Enable Apache rewrite module (safe even if unused)
RUN a2enmod rewrite

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for Render
EXPOSE 80
