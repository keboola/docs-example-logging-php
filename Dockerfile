FROM php:7

COPY . /src/
WORKDIR /src/

RUN apt-get update && apt-get install -y git && \
	curl -sS --fail https://getcomposer.org/installer | php && \
	php composer.phar install

ENTRYPOINT php main.php
