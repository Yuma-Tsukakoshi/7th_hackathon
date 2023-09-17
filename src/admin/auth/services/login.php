<?php
session_start();
include_once("../../../dbconnect.php");

if (isset($_POST['mail']) && isset($_POST['password'])) {
    $mail = $_POST['mail']; // HTMLのname属性を変更
    $password = $_POST['password'];

    if (!empty($mail) && !empty($password)) {
        $stmt = $pdo->prepare('SELECT * FROM user_invitations WHERE mail = :mail'); // ユーザー情報を取得するテーブル名に変更
        $stmt->bindValue(':mail', $mail);
        $stmt->execute();
        $row_cnt = $stmt->rowCount();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row_cnt > 0 && password_verify($password, $result['password'])){ // パスワードを検証
            session_regenerate_id(TRUE); // セッションidを再発行
            // $_SESSION['unique_email'] = $_POST['mail'];
            // $_SESSION['user_id'] = $result['id'];
            setcookie('user_id', $result['id'], time() + 60 * 60 * 24 * 14, '/');
            // echo $_COOKIE['user_id'];
            
            header('Location: ../../../user/index.php');
        } else {
            $_SESSION['error_message'] = 'Eメールもしくはパスワードが、間違っています';
            header('Location: ../../auth/login.php'); // ログインページにリダイレクト
            exit(); // 以降の処理を終了
        }
    } else {
        $_SESSION['error_message'] = '全て入力してください';
        header('Location: ../../auth/login.php'); // ログインページにリダイレクト
        exit(); // 以降の処理を終了
    }
}
?>
