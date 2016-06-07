<VirtualHost *:80>
	ServerName demo.res.ch

	Header add Set-Cookie "ROUTEID=.%{BALANCER_WORKER_ROUTE}e; path=/" env=BALANCER_ROUTE_CHANGED

	<Proxy balancer://static_cluster>
		BalancerMember http://<?php echo getenv('STATIC_APP_1'); ?> route=static1
		BalancerMember http://<?php echo getenv('STATIC_APP_2'); ?> route=static2

		ProxySet stickysession=ROUTEID
	</Proxy>

	<Proxy balancer://dynamic_cluster>
		BalancerMember http://<?php echo getenv('DYNAMIC_APP_1'); ?> route=dynamic1
		BalancerMember http://<?php echo getenv('DYNAMIC_APP_2'); ?> route=dynamic2

	</Proxy>

	ProxyPass "/api/" "balancer://dynamic_cluster/"
	ProxyPassReverse "/api/" "balancer://dynamic_cluster/"

	ProxyPass "/" "balancer://static_cluster/"
	ProxyPassReverse "/" "balancer://static_cluster/"
</VirtualHost>