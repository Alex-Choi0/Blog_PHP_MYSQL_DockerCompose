# ./Dockerfile
# PHP Docker 공식 문서 : https://hub.docker.com/_/php

# PHP 이미지를 사용합니다. 버전은 필요에 따라 조정할 수 있습니다.
FROM php:8.2-cli

# PHP의 mysqli을 사용하기 위한 extension을 설치
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# 나머지 필요한 작업들을 계속합니다치
COPY ./src /php/src/
WORKDIR /php/src/

# PHP 내장 서버를 시작합니다.
# Docker 컨테이너의 80포트를 활성화 합니다.
CMD [ "php", "-S", "0.0.0.0:80" ]