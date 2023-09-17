<!-- 入退室ページ フロント-->
<?php
// session_start();
require_once(dirname(__FILE__) . '/../dbconnect.php');

$sql = "SELECT * FROM user_visit_log WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $_COOKIE['user_id']);
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="../vendor/tailwind/tailwind.output.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/styles/intro.css">
  <link rel="stylesheet" href="../assets/styles/attend.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <script src="../assets/js/new-attend.js" defer></script>
  <title>入退室画面</title>
</head>

<body>
  <?php include(dirname(__FILE__) . '/../components/header.php'); ?>
  <div class="contents">
    <div class="anchor_animation">
      <img src="../assets/img/IMG_1317.PNG" alt="">
    </div>
    <div class="wave_animation">
      <svg class="svg" width="100%" height="100">
        <defs>
          <!-- パス共通（左右に広げている。微調整） -->
          <path id="path_nami22" d="中略">
            <animate id="animate_nami22" attributeName="d" dur="1s" repeatCount="indefinite" values="M -40 10 Q -30 20 -20 10 Q -10  0 0 10 Q 10 20 20 10 Q 30  0 40 10 Q 50 20 60 10 Q 70 20 80 10 V 29 H -40 Z;
                M -40 10 Q -30  0 -20 10 Q -10 20 0 10 Q 10  0 20 10 Q 30 20 40 10 Q 50  0 60 10 Q 70  0 80 10 V 29 H -40 Z;
                M -40 10 Q -30 20 -20 10 Q -10  0 0 10 Q 10 20 20 10 Q 30  0 40 10 Q 50 20 60 10 Q 70 20 80 10 V 29 H -40 Z;" />
          </path>
          <!-- 奥（往復） -->
          <pattern id="ptn_nami22_a" x="0" y="0" width="40" height="100" patternUnits="userSpaceOnUse">
            <use href="#path_nami22" fill="#8DC3F4" />
            <animate attributeName="x" dur="3s" repeatCount="indefinite" values="0; 40; 0" />
          </pattern>
          <!-- 中（左移動） -->
          <pattern id="ptn_nami22_b" x="0" y="10" width="40" height="110" patternUnits="userSpaceOnUse">
            <use href="#path_nami22" fill="#5598D4" />
            <animate attributeName="x" dur="7s" repeatCount="indefinite" values="0; -40" />
          </pattern>
          <!-- 手前（右移動） -->
          <pattern id="ptn_nami22_c" x="0" y="20" width="40" height="120" patternUnits="userSpaceOnUse">
            <use href="#path_nami22" fill="#2E78BA" />
            <animate attributeName="x" dur="2s" repeatCount="indefinite" values="0; 40" />
          </pattern>
        </defs>
        <!-- パターンで塗りつぶす、大きさ調整 -->
        <rect x="0" y="0" width="100%" height="100" fill="url(#ptn_nami22_a)"></rect>
        <rect x="0" y="0" width="100%" height="110" fill="url(#ptn_nami22_b)" transform="scale(3.5,1)"></rect>
        <rect x="0" y="0" width="100%" height="120" fill="url(#ptn_nami22_c)" transform="scale(2,1)"></rect>
      </svg>

      <div class="bird"></div>
      <div class="bird -type_2"></div>
      <div class="bird -type_3"></div>

    </div>
    <div class="attend_button">
      <button class="attend_button_click" id="js-attend_button" onclick="discord()">
        <span class="attend_button_click_item" id="js-attend_text">入室する</span>
      </button>
    </div>
  </div>
</body>

<script>
  function discord() {
    $.ajax({
      url: `http://localhost:8080/services/discord.php`,
      type: 'POST',
      success: function() {
        console.log("success");
      },
      error: function(xhr) {
        console.error("error");
      }
    });
  }
</script>


</html>