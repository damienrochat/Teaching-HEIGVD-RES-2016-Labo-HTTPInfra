docker kill $(docker ps -a -q)
docker rm $(docker ps -a -q)

docker rmi res/apache
docker rmi res/express
docker rmi res/reverse-proxy

docker build --tag res/apache --file ./docker/apache/Dockerfile ./docker/apache/
docker build --tag res/express --file ./docker/express/Dockerfile ./docker/express/
docker build --tag res/reverse-proxy --file ./docker/reverse-proxy/Dockerfile ./docker/reverse-proxy/

docker run -d --name res_apache_static res/apache
docker run -d --name res_express_dynamic res/express
docker run -d -e STATIC_APP=172.17.0.2 -e DYNAMIC_APP=172.17.0.3:3000 -p 8080:80 --name res_reverse_proxy res/reverse-proxy