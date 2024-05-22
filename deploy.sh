#!/bin/sh
echo "pwd : %B_S-krQw4My)7]"
USER=u115952086
HOST=access1001100812.webspace-data.io
DIR=www/   # the directory where your web site files should go

hugo && rsync -avz --delete public/ ${USER}@${HOST}:~/${DIR} # this will delete everything on the server that's not in the local public folder 

git add .
read -p "Input commit message : " message
git commit -m "$message"
git push github 

exit 0
