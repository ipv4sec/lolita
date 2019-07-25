FROM node:10

WORKDIR /data/
COPY . /data/

RUN npm i && node_modules/.bin/tsc

EXPOSE 3000

ENTRYPOINT /bin/sh -c /data/run.sh

