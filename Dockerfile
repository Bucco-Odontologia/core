FROM webdevops/php-nginx-dev:8.2-alpine

ENV WEB_DOCUMENT_ROOT=/app/public

WORKDIR /app

RUN apk add mysql-client mariadb-connector-c chromium

COPY laravel-nginx.conf /opt/docker/etc/nginx/vhost.common.d/laravel-nginx.conf

RUN echo "xdebug.start_with_request=yes" | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini > /dev/null && \
    echo "xdebug.client_host=host.docker.internal" | tee -a /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini > /dev/null

RUN echo "upload_max_filesize=200M" | tee -a /usr/local/etc/php/conf.d/98-webdevops.ini > /dev/null && \
    echo "post_max_size=200M" | tee -a /usr/local/etc/php/conf.d/98-webdevops.ini > /dev/null