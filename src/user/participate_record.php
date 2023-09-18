<?php
session_start();

require_once(dirname(__FILE__) . '/../dbconnect.php');

//イベント情報の取得
$sql = "SELECT * FROM event WHERE date = :date";
$stmt = $pdo->prepare($sql);
$timestamp = strtotime($_GET['date']);
$formattedDate = date("Y-m-d", $timestamp);
// var_dump($formattedDate);
$stmt->bindValue(':date', $formattedDate);
$stmt->execute();
$events = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="../vendor/tailwind/tailwind.output.css">
  <link rel="stylesheet" href="../assets/styles/participate.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>参加可否登録一覧</title>
</head>

<body>
  <div class="flex h-screen bg-gray-50" :class="{ 'overflow-hidden': isSideMenuOpen}">
    <div class="flex flex-col flex-1 w-full">
      <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
          <h2 class="my-6 text-2xl font-semibold text-gray-700 ">イベント一覧</h2>
          <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 "></h2>
            <span class="send_btn">
              <a href="http://localhost:8080/user/index.php" class="send_btn">←戻る</a>
            </span>
            <div class="mx-auto max-w-lg">
              <div class="space-y-6">
                <?php if ($events) { ?>
                  <?php foreach ($events as $key => $event) { ?>
                    <div class="mb-4 flex items-center justify-between border-t border-b py-4">
                      <div class="flex flex-col gap-0.5">
                        <span class="block font-bold lg:text-3xl"><?= $event['title'] ?></span>
                        <span class="block text-sm text-gray-500"><?= $event['date'] ?></span>
                        <span class="block text-sm text-gray-500"><?= substr($event["start_time"], 0, 5); ?> ～ <?= substr($event["end_time"], 0, 5) ?></span>
                        <span class="block text-sm text-gray-500"></span>
                      </div>
                      <p><?= $event['kisei'] ?></p>
                      <a href="http://localhost:8080/event/event_info/event_disp.php?id=<?= $event['id'] ?>&date=<?= $_GET['date'] ?>">
                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                          詳細
                        </span>
                      </a>
                      <button onclick="joinBtn(this)" data-uid="<?= $_COOKIE['user_id'] ?>" data-eid="<?= $event["id"] ?>" data-date="<?= $_GET['date'] ?>" class="
                          px-2 py-1 font-semibold leading-tight text-blue-500 bg-green-100 rounded-full">参加
                      </button>
                    </div>

                    <!-- 参加不参加で場合分けする -->
                    <!-- <?php
                          if ($event["status_id"] == 0) {
                            echo '<button onclick="joinBtn(this)" data-uid="' . htmlspecialchars($_COOKIE['user_id']) . '" data-eid="' . htmlspecialchars($event["id"]) . '" data-date="' . htmlspecialchars($_GET['date']) . '" class="px-2 py-1 font-semibold leading-tight text-blue-500 bg-green-100 rounded-full">参加する</button>';
                          } else {
                            echo '<button class="px-2 py-1 font-semibold leading-tight text-gray-500 bg-gray-100 rounded-full" disabled=true >参加済</button>';
                          } ?> -->
              </div>
            </div>
          <?php } ?>
        <?php } else { ?>
          <div class="mx-auto max-w-lg">
            <div class="space-y-6">
              <details class="group rounded-xl bg-white shadow-[0_10px_100px_10px_rgba(0,0,0,0.05)]">
                <summary class="flex cursor-pointer list-none items-center justify-between p-6 text-lg font-medium text-secondary-900">
                  <div>
                    <div>
                      イベントはありません
                    </div>
                  </div>
                </summary>
                <div class="px-6 pb-6 text-secondary-500">
                  <h1></h1>
                </div>
              </details>
            </div>
          <?php } ?>
          </div>
          </div>
        </div>
    </div>
    </main>
  </div>
  </div>
</body>
<script>
  function joinBtn(button) {
    const Btn = $(button);
    const uid = Btn.attr('data-uid');
    const eid = Btn.attr('data-eid');
    const date = Btn.attr('data-date');

    $.ajax({
      url: 'http://localhost:8080/services/participate_record.php',
      type: 'POST',
      data: {
        uid: uid,
        eid: eid,
        date: date
      },
      success: function(data) {
        console.log(data);
      },
      error: function(xhr) {
        console.error(xhr);
      }
    });
  }
</script>

</html>
