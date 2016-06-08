#!/bin/bash

php /etc/apache2/templates/reverse-proxy.conf.php > /etc/apache2/sites-available/001-reverse-proxy.conf
a2ensite 001-reverse-proxy.conf

apache2-foreground