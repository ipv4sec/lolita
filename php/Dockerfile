FROM php:7.3-fpm


WORKDIR    /var/www/
ADD index.php /var/www/

EXPOSE 3000

ENTRYPOINT ["php", "-S", "0.0.0.0:3000"]