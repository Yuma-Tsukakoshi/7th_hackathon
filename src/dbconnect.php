<?php

/* ドライバ呼び出しを使用して MySQL データベースに接続する */
$dsn = 'mysql:dbname=harbors;host=db';
$user = 'root';
$password = 'root';

$pdo = new PDO($dsn, $user, $password);

?>

