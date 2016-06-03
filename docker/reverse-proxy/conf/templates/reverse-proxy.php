<VirtualHost *:80>
	ServerName demo.res.ch

	<Proxy balancer://static_cluster>
		BalancerMember http://<?php echo getenv('STATIC_APP_1'); ?> loadfactor=2
		BalancerMember http://<?php echo getenv('STATIC_APP_2'); ?>
		
	</Proxy>

	<Proxy balancer://dynamic_cluster>
		BalancerMember http://<?php echo getenv('DYNAMIC_APP_1'); ?> loadfactor=2
		BalancerMember http://<?php echo getenv('DYNAMIC_APP_2'); ?>

	</Proxy>

	ProxyPass "/api/" balancer://dynamic_cluster/
	ProxyPassReverse "/api/" balancer://dynamic_cluster/

	ProxyPass "/" balancer://static_cluster/
	ProxyPassReverse "/" balancer://static_cluster/
</VirtualHost>