<?php
session_start();
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
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="../assets/js/calender.js" defer></script>
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
          <ul class="icon_slide">
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_1.jpg" alt="">3.0 木村宥哉<div class="anchor_img"></div>/li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_2.jpg" alt="">3.5 鈴木大騎</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_3.jpg" alt="">3.0 平手美羽</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_4.jpg" alt="">3.0 岩城和輝</li>
          </ul>
          <ul class="icon_slide">
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_5.jpg" alt="">3.5 森はるか</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_6.jpg" alt="">3.0 小野媛乃</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_7.jpg" alt="">3.0 井上岳</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_8.jpg" alt="">3.0 野呂美智子</li>
          </ul>
          <ul class="icon_slide">
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_9.jpg" alt="">3.0 塚越雄真</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_10.jpg" alt="">3.0 神野豪気</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_11.jpg" alt="">3.0 上野侑紗</li>
            <li class="content"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_12.jpg" alt="">3.5 辻健世</li>
          </ul>
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