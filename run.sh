#!/bin/bash

docker run -it --rm --name php-app -v .:/app:ro -p 8080:8080 php:8.2-cli php -S 0.0.0.0:8080 -t /app/web/


