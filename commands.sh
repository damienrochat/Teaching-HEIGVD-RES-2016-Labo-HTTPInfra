docker kill $(docker ps -a -q)
docker rm $(docker ps -a -q)

# Step 1
docker rmi res/apache
docker build --tag res/apache --file ./docker/apache/Dockerfile ./docker/apache/
docker run -d --name res_apache -p 8081:80 res/apache

# Step 2
docker rmi res/express
docker build --tag res/express --file ./docker/express/Dockerfile ./docker/express/
docker run -d --name res_express -p 8082:3000 res/express

#Step 3
docker rmi res/reverse-proxy
docker build --tag res/reverse-proxy --file ./docker/reverse-proxy/Dockerfile ./docker/reverse-proxy/
docker run -d --name res_apache_static res/apache # 172.17.0.4
docker run -d --name res_express_dynamic res/express # 172.17.0.5
docker run -d -p 8080:80 --name res_reverse_proxy res/reverse-proxy