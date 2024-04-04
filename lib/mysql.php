<?php
$db_user = 'root';
$db_password = '';
$db_name = 'web-blog';
$db_host = 'localhost';
$db_port = 3306;

$dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';port=' . $db_port;
$pdo = new PDO($dsn, $db_user, $db_password);