<?php
session_start();
$_SESSION = array();//セッションの中身をすべて削除
session_destroy();//セッションを破壊

// $msg = "ログアウトしました";
// echo $msg;
header('Location: http://localhost:8080/admin/auth/login_form.php');
exit();
?>
