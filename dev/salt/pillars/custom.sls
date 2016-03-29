# Place your custom pillars here
# example:
#
#node:
#  version: '0.10.35'

vhosting:
  server:
    webserver: nginx
    webserver_edition: vanilla
    config:
      php:
        PHP:
          upload_max_filesize: '128M'
          post_max_size: '128M'
          'date.timezone': 'Europe/Amsterdam'

zendserver: '~'

nginx:
  package:
    mainline: false

phpfpm:
  php_versions:
    - '7.0'
  modules:
    - php7.0-curl
    - php7.0-gd
    - php7.0-intl
    - php7.0-json
    - php7.0-mcrypt
    - php7.0-mbstring
    - php7.0-mysql
    - php7.0-xml
    - php-xdebug
