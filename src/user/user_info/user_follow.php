<?php
require_once dirname(__FILE__) . '/../../dbconnect.php';

$get_id = $_GET['get_id']; // URLパラメータからget_idを取得
$cookie_id = $_GET['cookie_id']; // URLパラメータからcookie_idを取得

// user_follower_relationテーブルに新しいレコードを挿入
$sql = "INSERT INTO user_follower_relation (user_id, follower_id, status_id) VALUES (:user_id, :follower_id, :status_id)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':user_id', $get_id, PDO::PARAM_INT);
$stmt->bindParam(':follower_id', $cookie_id, PDO::PARAM_INT);
$stmt->bindValue(':status_id', 1, PDO::PARAM_INT); // status_idに1を設定
$stmt->execute();

// フォローが完了したら、リダイレクトなど適切な処理を行うことができます
header('Location: ../../user/user_info/user_disp.php?id=' . $get_id);
?>