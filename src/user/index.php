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
    <!-- 3, 4期生の入室状態確認機能 -->
    <section class="status-section">
      <!-- 上のナビゲーション -->
      <div class="status-section__nav">
        <div class="status-section__nav__title">入室状況</div>
        <div class="status-section__nav__date">
          <div class="status-section__nav__date__text">日付</div>
          <div class="status-section__nav__date__input">
            <input type="date" name="date" id="date" value="2021-01-01" />
          </div>
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