FROM php:8.2-apache

# Copy all files to Apache's web directory
COPY . /var/www/html/

# Enable Apache mod_rewrite for clean URLs
RUN a2enmod rewrite

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
