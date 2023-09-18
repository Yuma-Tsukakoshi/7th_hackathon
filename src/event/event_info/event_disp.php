<!-- ユーザー詳細 フロント -->
<?php

require_once(dirname(__FILE__) . '/../../dbconnect.php');
// イベント情報取得
$sql = "SELECT * FROM event WHERE id = :eid";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':eid', $_GET['id']);
$event = $stmt->execute();

// イベント参加者情報の取得
$sql = "SELECT * FROM user_event_relation WHERE event_id = :eid INNER JOIN users ON user_event_relation.user_id = users.id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':eid', $eid);
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
              <?= $event['name'] ?>
            </td>
          </tr>
          <tr class="bg-white">
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-l">
              あだ名
            </th>
            <td class="px-6 py-4 text-l">
              <?= $event[0]['nickname'] ?>
            </td>
          </tr>

          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              縦もく
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['tate'] ?>
            </td>

          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              横もく
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['yoko'] ?>
            </td>

          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              ブラシス
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['brosis'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              大学
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['college'] . $event[0]['faculty'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              誕生日
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['birthday'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              最寄り駅
            </th>
            <td class="px-6 py-4">
              <?= $event[0]['station'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              兼サー
            </th>
            <td class="px-6 py-4">
              <?= $posts[0]['circle'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              趣味
            </th>
            <td class="px-2 py-4">
              <?= $posts[0]['hobby'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              ハバズによくいる日時
            </th>
            <td class="px-6 py-4">
              <?= $posts[0]['harborsdate'] ?>
            </td>
          </tr>
          <tr>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              自己紹介
            </th>
            <td class="px-6 py-4">
              <?= $posts[0]['message'] ?>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</body>

</html>
