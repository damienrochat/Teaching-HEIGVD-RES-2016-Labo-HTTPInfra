FROM php:7.0.6-apache
MAINTAINER Damien Rochat <damien.rochat@heig-v.ch>

COPY conf/ /etc/apache2/

RUN a2enmod proxy proxy_http &\
	a2ensite 000-* 001-*
