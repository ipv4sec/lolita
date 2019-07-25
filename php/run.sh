#!/usr/bin/env bash

echo "nodejs-cn nodejs.cn">> /etc/hosts

cd /var/www/
php -S 0.0.0.0:3000