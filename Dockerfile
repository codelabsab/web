FROM boxedcode/alpine-nginx-php-fpm
MAINTAINER CodeLabs <contact@codelabs.se>
RUN apk add --no-cache postfix mailx
COPY src/nginx /etc/nginx
COPY src/supervisord.conf /etc/supervisord.conf
