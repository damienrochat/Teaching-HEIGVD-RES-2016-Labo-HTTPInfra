docker kill $(docker ps -a -q)
docker rm $(docker ps -a -q)

docker rmi res/apache
docker rmi res/express
docker rmi res/reverse-proxy

#docker build --tag res/apache --file ./docker/apache/Dockerfile ./docker/apache/
#docker build --tag res/express --file ./docker/express/Dockerfile ./docker/express/
docker build --tag res/reverse-proxy --file ./docker/reverse-proxy/Dockerfile ./docker/reverse-proxy/

docker run --name res_reverse_proxy res/reverse-proxy
