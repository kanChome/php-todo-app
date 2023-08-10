FROM php:8.2.0-apache

## TODO:なぜlionig-devが必要か
RUN apt-get update && apt-get install -y libonig-dev && \ 
  docker-php-ext-install \
  pdo_mysql \
  && rm -rf /var/lib/apt/lists/*