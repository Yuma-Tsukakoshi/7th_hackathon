<!-- ユーザー詳細 フロント -->
<?php
require_once dirname(__FILE__) . '/../../dbconnect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$posts = $pdo->query($sql)->fetchAll();
?>



<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" /> -->
  <link rel="stylesheet" href="../../vendor/tailwind/tailwind.output.css">
  <link rel="stylesheet" href="../../assets/styles/user_disp.css">
  <link rel="stylesheet" href="../../assets/styles/user_disp_table.css">
  <script src="https://kit.fontawesome.com/b4c9445cdc.js" crossorigin="anonymous" defer></script>
  <title>プロフィール詳細画面</title>
</head>

<body>
<a href="./">
      <div class="p-header__logos items-center">
        <div class="p-header__header-name profile"> <i class="fa-solid fa-arrow-left"></i>プロフィール</div>
      </div>
</a>
  <!-- <div class="">
  <header> -->
    <!-- webサイト名、ロゴ -->
    
  <!-- </header> -->

  <div class="">
    <div class="profile_header">
      <div class="profile_background"></div>
    </div>
    <div class="profile_icon">
      <div class="icon_circle_background"></div>
      <div class="profile_img"><img src="../../assets/img/LINE_ALBUM_3期生アイコン画像_230917_10.jpg" alt=""></div>
    </div>
    <div class="img_filter"></div>
    <div class="anchor_img"><img src="../../assets/img/IMG_1313.PNG" alt=""></div>
  </div>

  </div>


  <div class="flex git">
    <a href="<?= $posts[0]['github'] ?>"><i class="fa-brands fa-github "></i></a>
    <a href="<?= $posts[0]['instagram'] ?>"><i class="fa-brands fa-instagram insta"></i></a>
  </div>

  <div class="">
  <table class="w-3/4 text-sm text-left text-gray-500 dark:text-gray-400 mx-auto my-28 table">
        
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 ">
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-xl w-1/2">
                    名前
                </th>
                <td class="px-6 py-4 text-xl w-1/2">
                    <?= $posts[0]['name'] ?>
                </td>
            </tr>
            <tr class="bg-white">
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-l">
                    あだ名
                </th>
                <td class="px-6 py-4 text-l">
                    <?= $posts[0]['nickname'] ?>
                </td>
            </tr>

            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    縦もく
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['tate'] ?>
                </td>

            </tr>
            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    横もく
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['yoko'] ?>
                </td>

            </tr>
            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ブラシス
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['brosis'] ?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    大学
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['college'].$posts[0]['faculty']?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    誕生日
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['birthday'] ?>
                </td>
            </tr>
            <tr>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    最寄り駅
                </th>
                <td class="px-6 py-4">
                  <?= $posts[0]['station'] ?>
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

</body>


</html>
