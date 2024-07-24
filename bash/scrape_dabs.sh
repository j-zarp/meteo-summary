#!/bin/bash

# add to crontab as follows:
# */15 * * * * /root/docker/traefik/nginx/www/meteo-summary/bash/scrape_dabs.sh >> /var/log/dabs-scrapping.log 2>&1

wget -O /root/docker/traefik/nginx/www/meteo-summary/web/assets/pdf/dabs_today.pdf https://www.skybriefing.com/o/dabs?today 
wget -O /root/docker/traefik/nginx/www/meteo-summary/web/assets/pdf/dabs_tomorrow.pdf https://www.skybriefing.com/o/dabs?tomorrow 


