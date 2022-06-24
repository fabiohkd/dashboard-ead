FROM php:8.1.1-fpm

<<<<<<< HEAD
# Arguments defined in docker-compose.yml
ARG user=fabio
=======
# Arguments
ARG user=carlos
>>>>>>> parent of 7266c5b... Merge branch 'main' of https://github.com/fabiohkd/dashboard-ead into main
ARG uid=1000

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
<<<<<<< HEAD
    unzip \
		nodejs \
		npm 
=======
    unzip
>>>>>>> parent of 7266c5b... Merge branch 'main' of https://github.com/fabiohkd/dashboard-ead into main

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd sockets

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

# Install redis
RUN pecl install -o -f redis \
    &&  rm -rf /tmp/pear \
    &&  docker-php-ext-enable redis

# Set working directory
WORKDIR /var/www

USER $user