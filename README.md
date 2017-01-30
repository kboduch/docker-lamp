# Ubuntu 16.04 - Apache 2.4.18 - MySQL 5.7.17 - PHP 7.0.13 

Simple LAMP docker. Enjoy!

####Commands

    docker-compose build --no-cache
    docker-compose up -d
    docker-compose ps
    docker-compose stop && docker-compose rm -fv
    
    docker exec -it dockercomposerbase_web_1 /bin/bash
	docker exec -it dockercomposerbase_database_1 mysql -u root -prootpassword
	docker exec -it dockercomposerbase_database_1 mysql -u dbuser -puserpassword
	docker exec -i dockercomposerbase_database_1 mysql -u root -prootpassword < dump.sql
	
####Available ENVs (see index.php)

    DATABASE_1_PORT_3306_TCP_ADDR
    DATABASE_1_PORT_3306_TCP_PORT
    DATABASE_1_ENV_MYSQL_DATABASE
    DATABASE_1_ENV_MYSQL_USER
    DATABASE_1_ENV_MYSQL_PASSWORD
    REDIS_1_PORT_6379_TCP_ADDR
    REDIS_1_PORT_6379_TCP_PORT

####Volumes
| HOST | CONTAINER |
| ---- | ----------- |
| ./code | /var/www/html |
| ./.docker/logs/apache2 | /var/logs/apache2 |
| ./.docker/data/redis | /data  |
| ./.docker/data/mysql | /var/lib/mysql |

####Port mapping
| HOST | CONTAINER |
| ---- | ------- |
| 8080 | 80 |
| 8443 | 443 |

####MySQL env

    MYSQL_ROOT_PASSWORD: rootpassword
    MYSQL_DATABASE: dbname
    MYSQL_USER: dbuser
    MYSQL_PASSWORD: userpassword

####PHP mods installed

    php7.0-mysql 
    php7.0-curl 
    php7.0-gd 
    php7.0-intl 
    php7.0-imap 
    php7.0-mcrypt 
    php7.0-pspell 
    php7.0-recode 
    php7.0-sqlite3 
    php7.0-tidy 
    php7.0-xmlrpc 
    php7.0-xsl 
    php7.0-mbstring 
    php-imagick 
    php-memcache 
    php-pear 
    php-gettext 
    php-apcu 

####What to do
 1. Place your code inside `code` folder.
 2. Adjust `DocumentRoot` in `000-default.conf` & `default-ssl.conf`.
 3. [Re]build image. Use `--no-cache` flag if image already exists.
 4. Create and start containers with `docker-compose up -d`.
 5. Visit `http://localhost:8080` or `https://localhost:8443`.
