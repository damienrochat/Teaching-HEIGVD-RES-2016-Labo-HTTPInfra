FROM php:7.0.6-apache
MAINTAINER Damien Rochat <damien.rochat@heig-v.ch>

COPY conf/ /etc/apache2/

COPY scripts/setup.sh /usr/local/sbin/setup.sh

RUN \
	apt-get update && \
	apt-get install -y wget unzip && \
	rm -rf /var/lib/apt/lists/*

RUN \
	a2enmod proxy proxy_http proxy_balancer lbmethod_byrequests headers && \
	a2ensite 000-default.conf

RUN \
	wget https://releases.hashicorp.com/serf/0.7.0/serf_0.7.0_linux_amd64.zip && \
	unzip serf_0.7.0_linux_amd64.zip && \
	mv serf /usr/bin/ && \
	rm serf_0.7.0_linux_amd64.zip

CMD ["sh", "/usr/local/sbin/setup.sh"]