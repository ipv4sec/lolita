
FROM golang:1.12

WORKDIR /app
COPY . /app

RUN go build -o application cmd.go

EXPOSE 3000

ENTRYPOINT /bin/sh -c /data/run.sh

