<?php
$login = trim(filter_var( $_POST['login'], FILTER_SANITIZE_SPECIAL_CHARS));
$password = trim(filter_var( $_POST['password'], FILTER_SANITIZE_SPECIAL_CHARS));

$error = "";
if(strlen($login) < 3)
    $error = 'Введите логин';
else if(strlen($password) < 5)
    $error = 'Введите пароль';

if($error != ''){
    echo $error;
    exit();
}

require_once "../lib/mysql.php";

$salt = 'sdshutfh';
$password = md5($salt . $password);

$sql = 'SELECT id FROM users WHERE `login` = ? AND  `password` = ?';
$query = $pdo->prepare($sql);
$query->execute([$login, $password]);

if ($query->rowCount() == 0)
    echo "Такого пользователя нет";
else {
    setcookie('login', $login, time() + 3600 * 24 * 30, "/");
    echo "Done";

}