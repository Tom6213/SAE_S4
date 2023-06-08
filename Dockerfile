FROM php:8.2-apache
RUN apt-get update && apt-get upgrade -y
RUN apt install default-jdk
RUN apt install default-jre
VOLUME /var/www/html/
EXPOSE 80