<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Plus+Jakarta+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="../../assets/styles/common.css">
  <link rel="stylesheet" href="../admin.css">
</head>

<body>
  <main>
      <h1>ログインページ</h1>
      <form action="http://localhost:8080/admin/auth/signin.php" method="post">
        <div>
            <label>メールアドレス：<input type="text" name="mail" required></label>
        </div>
        <div>
            <label>パスワード：<input type="password" name="pass" required></label>
        </div>
        <input type="submit" value="ログイン">
    </form>
  </main>
</body>
</html>
