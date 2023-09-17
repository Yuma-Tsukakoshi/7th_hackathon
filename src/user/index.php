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
      <div class="older_members">
        <h1>3期生</h1>
        <div class="wrap slide-paused" ontouchstart="">
          <ul class="icon_slide">
            <li class="content" onclick="userdisp(this)" data-uid="1"><img  src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_1.jpg" alt="">3.0 木村宥哉<div class="anchor_img"></div>/li>
            <li class="content"onclick="userdisp(this)" data-uid="2"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_2.jpg" alt="">3.5 鈴木大騎</li>
            <li class="content" onclick="userdisp(this)" data-uid="3"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_3.jpg" alt="">3.0 平手美羽</li>
            <li class="content" onclick="userdisp(this)" data-uid="4"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_4.jpg" alt="">3.0 岩城和輝</li>
          </ul>
          <ul class="icon_slide">
            <li class="content" onclick="userdisp(this)" data-uid="5"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_5.jpg" alt="">3.5 森はるか</li>
            <li class="content" onclick="userdisp(this)" data-uid="6"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_6.jpg" alt="">3.0 小野媛乃</li>
            <li class="content" onclick="userdisp(this)" data-uid="7"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_7.jpg" alt="">3.0 井上岳</li>
            <li class="content" onclick="userdisp(this)" data-uid="8"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_8.jpg" alt="">3.0 野呂美智子</li>
          </ul>
          <ul class="icon_slide">
            <li class="content" onclick="userdisp(this)" data-uid="9"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_9.jpg" alt="">3.0 塚越雄真</li>
            <li class="content" onclick="userdisp(this)" data-uid="10"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_10.jpg" alt="">3.0 神野豪気</li>
            <li class="content" onclick="userdisp(this)" data-uid="11"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_11.jpg" alt="">3.0 上野侑紗</li>
            <li class="content" onclick="userdisp(this)" data-uid="12"><img src="../assets/img/LINE_ALBUM_3期生アイコン画像_230917_12.jpg" alt="">3.5 辻健世</li>
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

        <div class="younger_members">
        <h1>4期生</h1>
        <div class="wrap2 slide-paused" ontouchstart="">
          <ul class="icon_slide2">
            <li class="content" onclick="userdisp(this)" data-uid="13"><img src="../assets/img/C237AABD-D5AD-4C85-8BB7-0B8FB0DFA5A2.jpg">4.0 合田怜恩<div class="anchor_img"></div>/li>
            <li class="content" onclick="userdisp(this)" data-uid="14"><img src="../assets/img/07000377-6B00-4BF3-82AD-840429A3F40D.jpg">4.0 羽田大輝</li>
            <li class="content" onclick="userdisp(this)" data-uid="15"><img src="../assets/img/1A7606B4-5BBC-4F3F-9800-2F9CE3AF162B.jpg">4.0 河部羅森</li>
            <li class="content" onclick="userdisp(this)" data-uid="16"><img src="../assets/img/1F162CD4-08F0-411C-8131-6A0200F878E3.jpg">4.0 冨田晴代</li>
          </ul>
          <ul class="icon_slide2">
            <li class="content" onclick="userdisp(this)" data-uid="17"><img src="../assets/img/6BCA8C9B-93C8-4F6C-9BD9-46DC90D5682B.jpg">4.0 遠藤誠一</li>
            <li class="content" onclick="userdisp(this)" data-uid="18"><img src="../assets/img/B3620B54-C9E6-4518-9C6D-8A6158AE0733.jpg">4.0 浦部創造</li>
            <li class="content" onclick="userdisp(this)" data-uid="19"><img src="../assets/img/04E84965-B370-4418-BF0A-6EE8E3A10DE8.jpg">4.0 鋪屋瑠美</li>
            <li class="content" onclick="userdisp(this)" data-uid="20"><img src="../assets/img/E2D5B8EE-04EE-44EB-AA91-FBD8964F09EE.jpg">4.0 大高正太郎</li>
          </ul>
        </div>
        <div class="wave2">
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

<script>
function userdisp(button) {
    const Btn = $(button);
    const uid = Btn.attr('data-uid');
    console.log(uid);

    $.ajax({
      url: 'http://localhost:8080/services/user_disp_show.php',
      type: 'POST',
      data: {
        uid: uid,
      },
      success: function(data) {
        console.log("success");
      },
      error: function(xhr) {
        console.error(xhr);
      }
    });
  }
</script>

</html>