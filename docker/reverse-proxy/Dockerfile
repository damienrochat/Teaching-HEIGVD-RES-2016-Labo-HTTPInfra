FROM php:7.0.6-apache
MAINTAINER Damien Rochat <damien.rochat@heig-v.ch>

COPY conf/ /etc/apache2/

COPY scripts/setup.sh /usr/local/sbin/setup.sh

RUN \
	a2enmod proxy proxy_http && \
	a2ensite 000-default.conf

CMD ["sh", "/usr/local/sbin/setup.sh"]