#!/bin/sh

sed -i 's/fakeflag/'`echo $GZCTF_FLAG|rot47`'/g' /var/www/html/game.js

unset GZCTF_FLAG
