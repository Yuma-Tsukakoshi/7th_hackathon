<?php
require_once(dirname(__FILE__) . '/../dbconnect.php');

$sql = "SELECT * FROM user_visit_log WHERE user_id = :id AND DATE(created_at) = :date"; 
$date = new DateTime('now'); 
$stmt = $pdo->prepare($sql); 
$stmt->bindValue(':id', $_COOKIE['user_id']); $stmt->bindValue(':date', $date->format('Y-m-d')); 
$stmt->execute(); 
$post = $stmt->fetch(PDO::FETCH_ASSOC);


$sql = "INSERT INTO user_visit_log(user_id) VALUES(:id)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_COOKIE['user_id']);
$stmt->execute();

$sql = "SELECT * FROM users WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_COOKIE['user_id']);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($post);


function send_to_discord($message)
{
  // Discord WebhookのURL（トークンを含む）を設定
  $webhookUrl = 'https://discord.com/api/webhooks/1152190733990756392/1avRdh1IoHDuXOONGoMXViT8OPKO02GAdKodXYlwJymcFOcof5K7m8xjUaMvmJ47Bqwz';

  $options = array(
    'http' => array(
      'method' => 'POST',
      'header' => 'Content-Type: application/json',
      'content' => json_encode($message),
    )
  );
  $response = file_get_contents($webhookUrl, false, stream_context_create($options)); //要求を$webhook_urlのURLに投げて結果を受け取る
  return $response === 'ok'; //$responseの値がokならtrueを返す
}

if($post){
  $status = '退室';
}else{
  $status = '入室'; 
}

//メッセージの内容を定義
$message = array(
  'username' => 'harbors',
  'content' => $user['name'] . 'さんが' . $status . 'しました', 
);


//メッセージを送信
send_to_discord($message);
