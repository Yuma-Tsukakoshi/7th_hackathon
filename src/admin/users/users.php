<?php

require_once(dirname(__FILE__) . '/../../dbconnect.php');

$sql = "SELECT * FROM users WHERE users.is_valid = 1";
$users = $pdo->query($sql)->fetchAll();


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link href="../../vendor/tailwind/tailwind.output.css" rel="stylesheet">
  <!-- 9/12追加↓ -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <title>ユーザー一覧</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">

    <?php include_once(dirname(__FILE__) . '/../../components/aside.php'); ?>

    <div class="flex flex-col flex-1 w-full">
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 ">good&new共有アプリ</h2>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ">ユーザー一覧</h2>
            <div class="w-full overflow-x-auto">
              <table class="w-full whitespace-no-wrap">
                <thead>
                  <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b">
                    <th class="px-4 py-3">名前</th>
                    <th class="px-4 py-3">期生</th>
                    <th class="px-4 py-3">縦もく</th>
                    <th class="px-4 py-3">横もく</th>
                    <th class="px-4 py-3">誕生日</th>
                    <th class="px-4 py-3">メール</th>
                    <th class="px-4 py-3">操作</th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y">
                  <?php foreach ($users as $key => $user) { ?>
                    <!-- data-idを追加 -->
                    <tr class="text-gray-700" data-id=<?= $user["id"] ?>>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["name"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["kisei"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["tate"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["yoko"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["birthday"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <p class="font-semibold items-center text-sm"><?= $user["mail"] ?></p>
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-blue-500 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Edit" data=<?= $user["id"] ?>>
                            <!-- <a href="?id=<?= $user["id"] ?>">編集</a> -->
                            編集
                          </button>
                          <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-gray-500 rounded-lg focus:outline-none focus:shadow-outline-gray" aria-label="Delete" onclick="deletePost(this)">
                            <!-- onclick="hidePost(this)" 上記に追加-->
                            <!-- ↑9/12追加した -->
                            <!-- <a href="http://localhost:8080/services/delete_user.php?id=<?= $user["id"] ?>">削除</a>
                          -->
                            削除
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
  function deletePost(button) {
    const tr = $(button).closest('tr');
    var id = tr.attr('data-id');
    console.log(id);
    if (confirm('本当に削除しますか？')) {
      $.ajax({
        // 以下のurlを変更
        url: 'http://localhost:8080/services/delete_user.php',
        type: 'POST',
        data: {
          id: id
        },
        success: function(data) {
          console.log("success");
          tr.remove();
        },
        error: function(xhr) {
          console.error("error");
        }
      });
    }
  }
</script>

</html>
