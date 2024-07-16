# Use Ubuntu 22.04 as the base image
FROM ubuntu:22.04

# Set environment variables for MySQL root password and database name
ENV MYSQL_ROOT_PASSWORD=admin
ENV MYSQL_DATABASE=beshctfdb

# Install necessary packages
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    software-properties-common \
    && add-apt-repository ppa:ondrej/php \
    && apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    nginx \
    php8.2 \
    php8.2-fpm \
    php8.2-mysql \
    php8.2-mbstring \
    php8.2-xml \
    php8.2-curl \
    php8.2-zip \
    nano \
    mysql-server \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# Configure PHP-FPM
RUN sed -i "s/listen = \/run\/php\/php8.2-fpm.sock/listen = 9000/" /etc/php/8.2/fpm/pool.d/www.conf

# Configure Nginx
COPY nginx.conf /etc/nginx/sites-available/default

# Set up Laravel application
WORKDIR /var/www/html
COPY . .

# # Install Composer dependencies
# RUN apt-get update && \
#     DEBIAN_FRONTEND=noninteractive apt-get install -y \
#     curl \
#     && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
#     && apt-get clean \
#     && rm -rf /var/lib/apt/lists/* \
#     && composer install --no-dev

# Set permissions
RUN chown -R www-data:www-data /var/www/html/storage

# Initialize MySQL and set root password
RUN service mysql start && \
    mysql -u root -proot -e "USE mysql;" && \
    mysql -u root -proot -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'admin';" && \
    mysql -u root -padmin -e "CREATE DATABASE beshctfdb;" && \
    service mysql stop


# Expose ports
EXPOSE 80

# Start services
CMD service mysql start && service php8.2-fpm start && nginx -g "daemon off;"