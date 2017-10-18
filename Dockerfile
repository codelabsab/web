FROM boxedcode/alpine-nginx-php-fpm
MAINTAINER CodeLabs <contact@codelabs.se>
RUN apk add --no-cache postfix mailx
COPY src/nginx.conf /etc/nginx/nginx.conf
COPY src/supervisord.conf /etc/supervisord.conf
