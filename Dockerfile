# Sử dụng Image PHP 8.2 kèm Apache
FROM php:8.2-apache

# Cài đặt extension mysqli để PHP kết nối được với MySQL
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Copy toàn bộ code vào thư mục web của Apache
COPY . /var/www/html/

# Mở cổng 80 của container
EXPOSE 80