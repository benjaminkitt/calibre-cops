#!/bin/bash

#
# add crontab for root
#
crontab /scripts/crontab

#
# start crond
#
/etc/init.d/cron start

#
# start php-fpm
/usr/sbin/php5-fpm -D

#
# start nginx
#
/usr/sbin/nginx -g "daemon off;" -c /etc/nginx/nginx.conf