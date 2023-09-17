<?php
require_once(dirname(__FILE__) . '../../dbconnect.php');

$sql = "SELECT id,name,kisei,image FROM users WHERE user_exist = 1";
$posts = $pdo->query($sql)->fetchAll();

?>

<!-- イントロページ作成場所 フロント -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/styles/normalize.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@3.0.2/destyle.min.css">
  <link rel="stylesheet" href="../assets/styles/calendar.css">
  <link rel="stylesheet" href="../assets/styles/intro.css" />
  <link href="../vendor/tailwind/tailwind.output.css" rel="stylesheet" />
  <script src="../assets/js/hamburger.js" defer></script>
  <script src="../assets/js/new-attend.js" defer></script>
  <script src="../assets/js/calender.js" defer></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <title>イントロページ</title>
</head>

<body>
  <!-- ヘッダー -->

  <?php

  include("../components/header.php"); ?>
  <main>
    <!-- 3, 4期生の入室状態確認機能 イントロページver -->
    <section class="upbar-section">
      <!-- 上のナビゲーション -->
      <div class="upbar-section__nav">
        <!-- 入退室画面へ飛ぶボタン -->
        <div class="upbar-section__nav__attend">
          <a href="http://localhost:8080/user/attend.php" class="upbar-section__nav__attend__link">入退室</a>
        </div>
        <!-- 今のハーバーズにいる人がわかる画面へ飛ぶボタン -->
        <div class="status-section__nav__status">
          <a href="http://localhost:8080/user/index.php" class="upbar-section__nav__attend__link">今のHarborS</a>
        </div>
      </div>
    </section>
    
    <section class="change_tab_container">
    </section>
    <section class="member_status_container">
      <div class="younger_members">
        <h1>3期生</h1>
        <div class="wrap slide-paused" ontouchstart="">
<?php
$items = $posts; // $posts は要素の配列と仮定

// 4つずつ要素をグループ化する
$groupedItems = array_chunk($items, 4);

foreach ($groupedItems as $group) {
    echo '<ul class="icon_slide">';
    
    foreach ($group as $post) {
        echo '<li class="content"><img src="' . $post['image'] . '" alt="">';
        echo $post['kisei'] . ' ' . $post['name'];
        echo '<div class="anchor_img"></div></li>';
    }
    
    echo '</ul>';
}
?>

        </div>
        <div class="wave">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 300" width="1200" height="300">
		<defs>
			<path d="M 0,0 v 100,0 q 150,50 300,0 t 300,0 q 150,50 300,0 t 300,0 v 0,-100 Z" id="wave" />
		</defs>
		<use xlink:href="#wave" />
		<use xlink:href="#wave" x="-30" y="10" />
		<use xlink:href="#wave" x="-60" />
	</svg>
</div>
      </div>
    </section>

    <!-- カレンダー -->
    <section class="calendar-section">
      <div class="calendar open-calendar" id="show-calendar">
        <button id="prev" class="arrow left head" type="button"></button>
        <button id="next" class="arrow right head" type="button"></button>
        <div id="calendar"></div>
      </div>
    </section>
  </main>
</body>

</html>