<?php
$username = trim(filter_var($_COOKIE['login'], FILTER_SANITIZE_SPECIAL_CHARS));;
$message = trim(filter_var( $_POST['text'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = "";
if(strlen($message) < 3)
    $error = 'Введите сообщение';
if($error != ''){
    echo $error;
    exit();
}

require_once "../lib/mysql.php";

$sql = 'INSERT INTO chat(name, message) VALUES(?, ?)';
$query = $pdo->prepare($sql);
$query->execute([$username, $message]);

echo "Done";