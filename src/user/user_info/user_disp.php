<!-- ユーザー詳細 フロント -->

<?/*php
require_once(dirname(__FILE__) . '/../../dbconnect.php');
require_once(dirname(__FILE__) . '/../../admin/invalid_count.php');
require_once(dirname(__FILE__) . '/../../admin/invalid_exam_count.php');

$sql1 = "SELECT * FROM users WHERE id = :id ";
$stmt1 = $pdo->prepare($sql1);
$stmt1->bindValue(":id", $_REQUEST["id"]);
$stmt1->execute();
$user = $stmt1->fetch();

$sql2 = "SELECT clients.service_name ,relation.valid FROM user_register_client as relation INNER JOIN clients ON relation.client_id = clients.client_id WHERE user_id = :id";
$stmt2 = $pdo->prepare($sql2);
$stmt2->bindValue(":id", $_REQUEST["id"]);
$stmt2->execute();
$agents = $stmt2->fetchAll();*/
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" /> -->
  <link rel="stylesheet" href="../../vendor/tailwind/tailwind.output.css">
  <link rel="stylesheet" href="../../assets/styles/user_disp.css">
  <title>プロフィール詳細画面</title>
</head>

<body>
  <header>
    <!-- webサイト名、ロゴ -->
    <a href="./">
      <div class="p-header__logos">
        <div class="arrow_left">
        </div>
        <div class="p-header__header-name">プロフィール</div>
      </div>
    </a>
  </header>

  <main>
    <div class="profile_header">
      <div class="profile_background"></div>
    </div>
    <div class="profile_icon">
      <div class="icon_circle_background"></div>
      <div class="profile_img"><img src="../../assets/img/LINE_ALBUM_3期生アイコン画像_230917_10.jpg" alt=""></div>
    </div>
    <div class="img_filter"></div>
    <div class="anchor_img"><img src="../../assets/img/IMG_1313.PNG" alt=""></div>
  </main>
</body>

</html>