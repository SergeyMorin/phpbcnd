<?php
require_once "../lib/mysql.php";

$sql = 'SELECT * FROM chat ORDER BY id DESC LIMIT 10';
$query = $pdo->query($sql);
$messages = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($messages as $message) {
    echo "<div><strong>{$message->name}</strong>: {$message->message}</div>";
}
