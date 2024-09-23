FROM php:8.3-apache AS base

RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html
COPY . /var/www/html/

FROM base AS server
EXPOSE 80
CMD ["apache2-foreground"]