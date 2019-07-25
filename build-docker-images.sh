#!/usr/bin/env bash

cd go
docker build -t ipv4sec/go:v3 .
cd ..
#--------------------------------

cd node
docker build -t ipv4sec/node:v3 .
cd ..
#--------------------------------

cd php
docker build -t ipv4sec/php:v3 .
cd ..
#--------------------------------