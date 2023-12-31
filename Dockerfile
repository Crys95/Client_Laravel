FROM php:7.4-fpm-alpine

# Install Laravel framework system requirements (https://laravel.com/docs/8.x/deployment#optimizing-configuration-loading)
RUN apk add oniguruma-dev postgresql-dev libxml2-dev
RUN docker-php-ext-install \
        bcmath \
        ctype \
        fileinfo \
        json \
        mbstring \
        pdo_mysql \
        pdo_pgsql \
        tokenizer \
        xml \
        pcntl

RUN docker-php-ext-configure pcntl --enable-pcntl

# Copy Composer binary from the Composer official Docker image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV WEB_DOCUMENT_ROOT /app/public
ENV APP_ENV production

WORKDIR /app/api-veiculo
COPY . .

RUN COMPOSER_VENDOR_DIR="/app/vendor"

RUN composer install --no-interaction --ignore-platform-req=ext-sockets
#--optimize-autoloader --no-dev
# Optimizing Configuration loading
RUN php artisan config:cache
# Optimizing Route loading
RUN php artisan route:cache
# Optimizing View loading
RUN php artisan view:cache
RUN php artisan l5-swagger:generate

CMD php artisan serve --host=0.0.0.0 --port=3002
