<?php

require_once(dirname(__FILE__) . '/../../dbconnect.php');


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="
  ../admin.css">
  <link href="../../vendor/tailwind/tailwind.output.css" rel="stylesheet">
  <title>投稿追加画面</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">

    <?php include_once(dirname(__FILE__) . '/../../components/aside.php'); ?>

    <div class="flex flex-col flex-1 w-full">
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 ">good&new共有アプリ</h2>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ">good&new投稿</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
              <div class="my-8 flex justify-center">
                <table class="w-full mx-8 max-w-4xl bg-white shadow-md rounded-lg overflow-hidden">
                  <thead class="bg-blue-500 text-white">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-left text-lg  font-medium uppercase tracking-wider">
                        キー
                      </th>
                      <th scope="col" class="px-6 py-3 text-left text-lg font-medium uppercase tracking-wider">
                        バリュー
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-ms font-medium text-gray-900">
                          ユーザーID
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <input type="number" min=1 name="uid" required class="required" placeholder="ユーザーIDを入力">
                      </td>
                    </tr>
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-ms font-medium text-gray-900">
                          投稿
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" name="post" required class="required" placeholder="good&newを入力">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="btn_wrapper">
                <button type="submit" class="btn submit  update_btn">登録</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>
