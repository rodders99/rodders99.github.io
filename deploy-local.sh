#!/bin/sh
#echo "pwd : %B_S-krQw4My)7]"
#USER=u115952086
#HOST=access1001100812.webspace-data.io
#DIR=www/   # the directory where your web site files should go
echo "Deploying to local apache server"

hugo && rclone sync -L /home/hass/Documents/webdev/dev2/public /var/www/html

exit 0
