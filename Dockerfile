FROM php/7.2-apache
RUN a2enmod rewrite
RUN docker-php-ext-install pdo_mysql
COPY assets /var/www/assets
COPY commands /var/www/commands
COPY config /var/www/config
COPY controllers /var/www/controllers
COPY mail /var/www/mail
COPY models /var/www/models
COPY runtime /var/www/runtime
COPY vendor /var/www/vendor
COPY views /var/www/views
COPY widgets /var/www/widgets
COPY web /var/www/html
COPY requirements.php /var/www/html
RUN mv /var/www/config/db-docker.php /var/www/config/db.php
RUN chown -R www-data:www-data /var/www