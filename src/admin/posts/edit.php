<?php

require_once(dirname(__FILE__) . '/../../dbconnect.php');

$id = $_REQUEST['id'];
$sql = "SELECT * FROM good_new WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);

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
  <title>投稿編集画面</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">

    <?php include_once(dirname(__FILE__) . '/../../components/aside.php'); ?>

    <div class="flex flex-col flex-1 w-full">
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 ">good&new共有アプリ</h2>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 ">good&new編集</h2>
            <form action="http://localhost:8080/services/update_post.php" method="POST" enctype="multipart/form-data">
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
                          投稿
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <input type="text" name="post" required class="required" value="<?= $post["post"] ?>">
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <input type="hidden" name="id" value="<?= $post["id"] ?>">
              <div class="btn_wrapper">
                <button type="submit" class="btn submit  update_btn">更新</button>
              </div>
            </form>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>
