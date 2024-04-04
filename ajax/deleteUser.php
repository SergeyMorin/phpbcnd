<?php
require_once "../lib/mysql.php";

$user_id = $_POST['id'];
$sql = 'DELETE FROM users WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$user_id]);

echo "Done";