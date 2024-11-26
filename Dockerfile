# Use the official PHP 8.3 image with Apache
FROM php:8.3-apache

# Install required PHP extensions (optional but common)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable mod_rewrite for Apache (optional but common for PHP projects)
RUN a2enmod rewrite

# Set the working directory to Apache's web root
WORKDIR /var/www/html

# Copy your project files into the container
COPY . /var/www/html/

# Expose Apache's default HTTP port
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
