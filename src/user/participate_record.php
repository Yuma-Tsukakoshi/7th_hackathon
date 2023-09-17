<!-- 参加可否登録ページ バックエンド -->
<?php

// session_start();
require_once(dirname(__FILE__) . '/../dbconnect.php');

// 削除成功時 のメッセージ
// if (isset($_GET['message']) && $_GET['message'] === 'deleted') {
//   $message = "削除しました。";
// }

//イベント情報の取得
$sql = "SELECT * FROM event WHERE date = :date";
$stmt = $pdo->prepare($sql);
$timestamp = strtotime($_GET['date']);
$formattedDate = date("Y-m-d", $timestamp);
var_dump($formattedDate);
$stmt -> bindValue(':date', $formattedDate,PDO::PARAM_STR);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

// $sql = "SELECT date FROM event WHERE date = '2023-09-20'";
// $stmt = $pdo->prepare($sql);
// $stmt->execute();
// $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($events);

// if (!isset($_SESSION['id'])) {
//     header('Location: http://localhost:8080/admin/boozer_auth/boozer_signup.php');
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../vendor/tailwind/tailwind.output.css">
  <link rel="stylesheet" href="../assets/styles/participate.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>参加可否登録一覧</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <div class="flex flex-col flex-1 w-full">
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 ">イベント一覧</h2>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 "></h2>
            <span class="send_btn">
              <!-- <a href="http://localhost:8080/admin/boozer_index_countstudents.php">
                人数通知メールを各企業に送る
              </a> -->
            </span>
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                    <th class="px-4 py-3">イベント名</th>
                    <th class="px-4 py-3">対象期生</th>
                    <th class="px-4 py-3">実施時間</th>
                    <th class="px-4 py-3">操作</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y">
                  <?php foreach ($events as $key => $event) { ?>
                    <tr class="text-gray-700">
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $event["updated_at"] ?></p>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?= $agent["started_at"] ?> ~ <?= $agent["ended_at"] ?>
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                          登録承認
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        <?php
                        $found = false;
                        for ($i = 0; $i < count($agent_count); $i++) {
                          if ($agent_count[$i]["client_id"] == $agent["client_id"]) {
                            print_r($agent_count[$i]["sum"] . "人");
                            $found = true;
                            break;
                          }
                        }
                        if (!$found) {
                          print_r("0人");
                        } ?>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit" data=<?= $agent["client_id"] ?>>
                            <a href="http://localhost:8080/agent/agent_info/agent_disp.php?id=<?= $agent["client_id"] ?>&exist=1">詳細</a>
                          </button>
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-gray-500 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit" onclick="hideUser(this)">
                            <a href="http://localhost:8080/admin/delete.php?id=<?= $agent["client_id"] ?>">削除</a>
                          </button>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
<script>
  // function hideUser(button) {
  //   const tr = $(button).closest('tr');
  //   const id = tr.attr('data-id');

  //   if (confirm('本当に削除しますか？')) {
  //     $.ajax({
  //       url: 'http://localhost:8080/admin/delete.php',
  //       type: 'POST',
  //       data: {
  //         id: id
  //       },
  //       success: function(data) {
  //         console.log(data);
  //         tr.addClass('hidden');
  //       },
  //       error: function(xhr) {
  //         console.error(xhr);
  //       }
  //     });
  //   }
  // }
</script>

</html>
