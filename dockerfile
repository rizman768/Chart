FROM php:7.4-fpm-alpine

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo pdo_mysql


WORKDIR /app

COPY . .

RUN cd /usr/local/etc/php/conf.d/ && \
    echo 'memory_limit = 1024M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini
RUN composer install


CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000