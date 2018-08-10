FROM php:7.0-apache

# Docker labels
LABEL maintainer="https://github.com/rdrgporto" \
description="Dockerizing a PHP Application"

COPY app /var/www/html/
