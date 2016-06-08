docker kill $(docker ps -a -q)
docker rm $(docker ps -a -q)

docker rmi res/apache
docker rmi res/express
docker rmi res/reverse-proxy

docker build --tag res/apache --file ./docker/apache/Dockerfile ./docker/apache/
docker build --tag res/express --file ./docker/express/Dockerfile ./docker/express/
docker build --tag res/reverse-proxy --file ./docker/reverse-proxy/Dockerfile ./docker/reverse-proxy/

docker run -d --name res_apache_static_1 res/apache
docker run -d --name res_apache_static_2 res/apache
docker run -d --name res_express_dynamic_1 res/express
docker run -d --name res_express_dynamic_2 res/express
docker run \
	-e STATIC_APP_1=$(docker inspect --format '{{ .NetworkSettings.IPAddress }}' res_apache_static_1) \
	-e STATIC_APP_2=$(docker inspect --format '{{ .NetworkSettings.IPAddress }}' res_apache_static_2) \
	-e DYNAMIC_APP_1=$(docker inspect --format '{{ .NetworkSettings.IPAddress }}' res_express_dynamic_1):3000 \
	-e DYNAMIC_APP_2=$(docker inspect --format '{{ .NetworkSettings.IPAddress }}' res_express_dynamic_2):3000 \
	-p 8080:80 --name res_reverse_proxy res/reverse-proxy