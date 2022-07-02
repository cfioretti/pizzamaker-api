# Php and Apache base image
ARG PHP_VERSION=7.2
FROM webdevops/php-apache-dev:${PHP_VERSION}

# internal ports
ENV PHP_PORT=9000 \
    XDEBUG_PORT=9001

# internal settings
ENV WEB_DOCUMENT_ROOT=/srv/public \
    WEB_DOCUMENT_INDEX=index.php \
    WEB_ALIAS_DOMAIN=*.vm \
    WEB_PHP_TIMEOUT=600 \
    WEB_PHP_SOCKET=127.0.0.1:${PHP_PORT}

# disabled modules
ENV PHP_DISMOD=ioncube,redis

# updating and cleaning external libraries
RUN apt-get update && \
    apt-get upgrade -y  && \
    apt-get autoremove -y && \
    apt-get clean

RUN wget -O "/usr/local/bin/go-replace" "https://github.com/webdevops/goreplace/releases/download/1.1.2/gr-arm64-linux"
RUN chmod +x "/usr/local/bin/go-replace"
RUN "/usr/local/bin/go-replace" --version

COPY . /srv
WORKDIR /srv

# cleaning and set log permissions
RUN rm -rf storage/logs/* \
    && chown -R www-data:www-data storage \
    && chmod -R 755 /srv \
    && chmod -R 777 storage
