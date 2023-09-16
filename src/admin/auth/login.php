<?php
session_start()
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/output.css">
  <title>ログイン画面</title>
</head>

<body>
  <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-lg p-6 bg-white rounded-xl shadow-lg">
      <h1 class="text-2xl font-medium mb-5 text-center">ログイン</h1>
      <?php if (isset($_SESSION['error_message'])) { ?>
        <p class="text-xl text-red-600 mb-5"><?php echo $_SESSION['error_message']; ?></p>
        <?php unset($_SESSION['error_message']); ?>
      <?php } ?>
      <form action="../services/login.php" method="post">
        <div class="mb-4">
          <label class="block text-gray-700 font-medium mb-2" for="email">メールアドレス</label>
          <input class="border border-gray-400 p-2 w-full" type="email" id="email" name="email" required>
        </div>
        <div class="mb-6">
          <label class="block text-gray-700 font-medium mb-2" for="password">パスワード</label>
          <input class="border border-gray-400 p-2 w-full" type="password" id="password" name="password" required>
        </div>
        <button class="bg-blue-600 text-lg text-white rounded-lg px-4 py-4 hover:bg-blue-500 transition-colors duration-300 w-full" type="submit">ログイン</button>
      </form>
    </div>
</body>

</html>