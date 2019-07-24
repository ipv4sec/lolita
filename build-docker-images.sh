#!/usr/bin/env bash

cd go
docker build -t ipv4sec/go:v1 .
cd ..
#--------------------------------

cd node
docker build -t ipv4sec/node:v1 .
cd ..
#--------------------------------

cd php
docker build -t ipv4sec/php:v1 .
cd ..
#--------------------------------