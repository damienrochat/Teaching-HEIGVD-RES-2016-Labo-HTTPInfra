<VirtualHost *:80>
	ServerName demo.res.ch

	ProxyPass "/api/" "http://<?php echo getenv('DYNAMIC_APP'); ?>/"
	ProxyPassReverse "/api/" "http://<?php echo getenv('DYNAMIC_APP'); ?>/"

	ProxyPass "/" "http://<?php echo getenv('STATIC_APP'); ?>/"
	ProxyPassReverse "/" "http://<?php echo getenv('STATIC_APP'); ?>/"
</VirtualHost>