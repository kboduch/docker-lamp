FROM php:7.0.15-apache

COPY ./000-default.conf /etc/apache2/sites-available

EXPOSE 80

CMD ["apache2ctl", "-D", "FOREGROUND"]