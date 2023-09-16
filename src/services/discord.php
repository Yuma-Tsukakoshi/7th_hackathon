<?php

function send_to_discord($message)
{
  // Discord WebhookのURL（トークンを含む）を設定します
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

//メッセージの内容を定義
$message = array(
  'username' => 'harbors',
  'content' => '塚越雄真さんが退室しました', //Discordの場合
);

//メッセージを送信
send_to_discord($message);
