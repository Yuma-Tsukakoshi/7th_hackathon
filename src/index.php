<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="./vendor/tailwind/tailwind.css" rel="stylesheet" />
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script>
  <title>トップページ</title>
</head>

<body>
  <h1 class="text-3xl font-bold underline text-center">
    Good & New Sharing
  </h1>
  <button onclick="discord()">discordに送信</button>

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
