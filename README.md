<h1>docker-compose php, mysql을 Dockerfile, docker-compose.yaml을 이용하여 서버 구성하기</h1>

<p>관련 블로그 <a href="https://engineeringshw.blogspot.com/2023/12/docker-compose-php-mysql-dockerfile.html">링크</a></p>

<h3>1. docker-compose 실행방법</h3>
<p>- .env, .mysql.env파일을 작성한다.</p>
<p>- 루트경로(./TeamNova_PHP)에서 아래 터미널을 실행한다.</p>
<p>- $ docker-compose up -d --build</p>
<p>- 해당 터미널이 실행됬는지 확인하기 위해서는 "docker ps" 터미널을 실행</p>