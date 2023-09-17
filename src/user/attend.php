<!-- 入退室ページ フロント-->
<?php

/*require_once(dirname(__FILE__) . '/../../dbconnect.php');

$id = $_REQUEST['id'];
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id);
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);*/

?>

<!DOCTYPE html>
<html>

<head>
  <?php /*include_once(dirname(__FILE__) . '/../../components/aside.php'); */?>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../vendor/tailwind/tailwind.output.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/styles/attend.css">
  <title>入退室画面</title>
</head> 

<body>
  <div class="contents">
    <div class="anchor_animation">
      <img src="../assets/img/7.png" alt="">
    </div>
    <div class="attend_button">
    <label><button><b>入室する</b></button><br></label>
    </div>
  </div>
</body>

</html>