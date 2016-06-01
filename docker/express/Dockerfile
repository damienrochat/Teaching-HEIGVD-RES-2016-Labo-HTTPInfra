FROM node:6.2.0
MAINTAINER Damien Rochat <damien.rochat@heig-v.ch>

WORKDIR /opt/app

COPY src .

RUN npm install

CMD ["node", "server.js"]