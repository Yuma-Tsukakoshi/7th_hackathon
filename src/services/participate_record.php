<?php
session_start();

require_once(dirname(__FILE__) . '/../dbconnect.php');

$uid = $_SESSION['user_id'];
$eid = $_POST['eid'];


// 参加登録処理実行
$sql = "INSERT INTO user_event_relation(user_id, event_id, status_id) VALUES($uid,$eid,1)";
$stmt = $pdo->prepare($sql);
$stmt->execute();

// 削除完了メッセージをセットしてリダイレクト
$message = "クライアント情報を削除しました。";
header("Location: http://localhost:8080/admin/boozer_index.php?message=" . urlencode($message));
exit();
