#!/bin/sh
#echo "pwd : %B_S-krQw4My)7]"
#USER=u115952086
#HOST=access1001100812.webspace-data.io
#DIR=www/   # the directory where your web site files should go
echo "Deploying to local apache server"

hugo && rclone sync -L /home/hass/Documents/webdev/dev2/public /var/www/html


SOURCE=/home/hass/Documents/webdev/dev2
DEST=/home/hass/Documents/data-projects

## Backup smmt project
echo "Backing up ${SOURCE}/content/projects/smmt_project from website to ${DEST}/smmtdata-evolved/docs/content/projects"
cp -R $SOURCE/content/projects/smmt-google-analytics-project/* $DEST/smmtdata-evolved/docs/content/projects

echo "Backing up ${SOURCE} /static/smmt_project/docs/* from website to ${DEST}/smmtdata-evolved/docs"
cp -R $SOURCE/static/smmt_project/docs/* $DEST/smmtdata-evolved/docs

## Backup EUSafetygate project
echo "Backing up ${SOURCE}/content/projects/eu-safety-gate/* from website to ${DEST}/smmtdata-evolved/docs/content/projects"
cp -R $SOURCE/content/projects/eu-safety-gate/* $DEST/eu-safetygate/00-Report/content/projects
cp -R $SOURCE/static/safetygate/docs/* 		$DEST/eu-safetygate/00-Report


## Backup EUSafetygate CURRENT YEAR project 


echo "Backing up ${SOURCE}/content/projects/eu-safety-gate/* from website to ${DEST}/smmtdata-evolved/docs/content/projects"
cp -R $SOURCE/content/projects/eu-safety-gate/* $DEST/eu-safetygate-current-year/00-Report/content/projects
cp -R $SOURCE/static/safetygate/docs-2024/* $DEST/eu-safetygate-current-year/00-Report/


exit 0

exit 0
