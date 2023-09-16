<?php
session_start();
//セッションを開始するため

require_once(dirname(__FILE__) . '/../../dbconnect.php');

$mail = $_POST['mail'];

$sql = "SELECT * FROM users INNER JOIN user_invitations ON users.id = user_invitations.user_id WHERE mail = :mail";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':mail', $mail);
$stmt->execute();
$member = $stmt->fetch();
//指定したハッシュがパスワードにマッチしているかチェック
if (password_verify($_POST['pass'], $member['password'])){
  // $member[pass] : 既にハッシュ化されたパスワード
    //DBのユーザー情報をセッションに保存
    $_SESSION['id'] = $member['id'];
    $_SESSION['name'] = $member['name'];
    header('Location: http://localhost:8080/admin/index.php');
    exit();
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="http://localhost:8080/admin/auth/login_form.php">戻る</a>';
}
?>

<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
