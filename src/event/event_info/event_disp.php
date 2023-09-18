<!-- ユーザー詳細 フロント -->
<?php

require_once(dirname(__FILE__) . '/../../dbconnect.php');
// イベント情報取得
$sql = "SELECT * FROM event WHERE id = :eid";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':eid', $_GET['id']);
$stmt->execute();
$event = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($event);

// イベント参加者情報の取得
$sql = "SELECT * FROM user_event_relation INNER JOIN users ON user_event_relation.user_id = users.id WHERE event_id = :eid";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':eid', $_GET['id']);
$stmt->execute();
$event_users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../../vendor/tailwind/tailwind.output.css">
  <link rel="stylesheet" href="../../admin/admin.css">
  <link rel="stylesheet" href="../assets/styles/badge.css">
  <title>イベント詳細</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <div class="">
      <table class="w-3/4 text-sm text-left text-gray-500 dark:text-gray-400 mx-auto my-28 table">
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 ">
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-xl w-1/2">
              イベント名
            </th>
            <td class="px-6 py-4 text-xl w-1/2">
              <?= $event['title'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              期生
            </th>
            <td class="px-6 py-4">
              <?= $event['kisei'] ?>
            </td>
          </tr>
          <tr class="bg-white">
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-l">
              日付
            </th>
            <td class="px-6 py-4 text-l">
              <?= $event["date"] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              場所
            </th>
            <td class="px-6 py-4">
              <?= $event['place'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              時間
            </th>
            <td class="px-6 py-4">
              <span class="block text-sm text-gray-500"><?= substr($event["start_time"], 0, 5); ?> ～ <?= substr($event["end_time"], 0, 5) ?></span>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              概要説明
            </th>
            <td class="px-6 py-4">
              <?= $event['description'] ?>
            </td>
          </tr>
        </tbody>
      </table>
    
      <ul>
        <p>参加者</p>
        <?php foreach ($event_users as $event_user) { ?>
          <li><?= $event_user['kisei'] ?>  : <?= $event_user['name'] ?></li>
          <?php } ?>
      </ul>
    </div>
  </div>
</body>
</body>

</html>
