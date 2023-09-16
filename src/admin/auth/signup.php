<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規登録画面</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../../assets/styles/common.css">
  <link rel="stylesheet" href="../admin.css">
</head>

<body>
  <main>
  <h1>新規会員登録</h1>
    <form action="http://localhost:8080/admin/auth/register.php" method="post">
      <div>
          <label>名前:<input type="text" name="name" required></label>
      </div>
      <div>
          <label>期生：<input type="number" step="0.5" name="kisei" required></label>
      </div>
      <div>
          <label>たてもく：<input type="text" name="tate" required></label>
      </div>
      <div>
          <label>よこもく：<input type="text" name="yoko" required></label>
      </div>
      <div>
          <label>誕生日：<input type="date" name="birthday" required></label>
      </div>
      <div>
          <label>メールアドレス：<input type="mail" name="mail" required></label>
      </div>
      <div>
          <label>パスワード:<input type="password" name="pass" required></label>
      </div>
      <input type="submit" value="新規登録">
    </form>
    <p>すでに登録済みの方は<a href="http://localhost:8080/admin/auth/login_form.php">こちら</a></p>
  </main>
</body>
</html>
