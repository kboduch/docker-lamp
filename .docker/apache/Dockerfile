FROM ubuntu:16.04

RUN apt-get update \
 && apt-get -y install vim

RUN apt-get -y install \
    apache2 php7.0 libapache2-mod-php7.0 \
    php7.0-mysql \
    php7.0-curl \
    php7.0-gd \
    php7.0-intl \
    php7.0-imap \
    php7.0-mcrypt \
    php7.0-pspell \
    php7.0-recode \
    php7.0-sqlite3 \
    php7.0-tidy \
    php7.0-xmlrpc \
    php7.0-xsl \
    php7.0-mbstring \
    php-imagick \
    php-memcache \
    php-pear \
    php-gettext \
    php-apcu \
 && a2enmod ssl rewrite \
 && a2ensite default-ssl \
 && service apache2 restart

COPY ["./000-default.conf", "./default-ssl.conf", "/etc/apache2/sites-available/"]

EXPOSE 80 443

ENTRYPOINT ["apache2ctl", "-D", "FOREGROUND"]