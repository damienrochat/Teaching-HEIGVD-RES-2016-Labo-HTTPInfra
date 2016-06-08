FROM php:7.0.6-apache
MAINTAINER Damien Rochat <damien.rochat@heig-v.ch>

COPY conf/apache2/ /etc/apache2/

COPY scripts/setup.sh /usr/local/sbin/setup.sh

RUN \
	a2enmod proxy proxy_http proxy_balancer lbmethod_byrequests headers && \
	a2ensite 000-default.conf

CMD ["sh", "/usr/local/sbin/setup.sh"]