<!-- ./src/envfile.php -->
<?php

$env = parse_ini_file('../.env');
$type = $env["PHP_TYPE"];

echo $type;

?>