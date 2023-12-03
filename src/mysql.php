<!-- ./src/mysql.php -->
<?php
$env = parse_ini_file('../.env');
$type = $env["PHP_TYPE"];
$host = $env["MYSQL_HOST"];
$username = $env["MYSQL_USERNAME"]; // MySQL 사용자 이름
$password = $env["MYSQL_PASSWORD"]; // MySQL 사용자 비밀번호
$dbname = $env["MYSQL_DATABASE"]; // 데이터베이스 이름
$dbport = $env["MYSQL_PORT"]; // 데이터베이스 포트

// MySQL에 연결
$conn = new mysqli($host, $username, $password, $dbname, $dbport);

// 연결 확인
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// 연결 종료
$conn->close();
?>