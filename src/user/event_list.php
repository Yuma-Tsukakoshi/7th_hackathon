<!-- 参加者イベント一覧 バックエンド -->
<?
require_once(dirname(__FILE__) . '/../dbconnect.php');
$id = $_COOKIE['user_id'];
// セッションでログインしているuserのidを取得

$sql = "SELECT event.id, event.title, event.date, event.start_time, event.end_time, event.kisei, event.description, users.name, event.created_at ,uer.id as relation_id FROM event INNER JOIN users ON event.author_id = users.id INNER JOIN user_event_relation as uer ON event.id = uer.event_id WHERE uer.user_id = $id and uer.status_id = 1";
$posts = $pdo->query($sql)->fetchAll();
?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/output.css">
  <link href="../../vendor/tailwind/tailwind.output.css" rel="stylesheet">
  <title>イベントリスト</title>
</head>


<div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="mx-auto max-w-screen-md px-4 md:px-8">
    <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-8 lg:text-3xl xl:mb-12">予約イベント一覧</h2>

    <?php foreach ($posts as $post) { ?>


      <div class="mb-4 flex items-center justify-between border-t border-b py-4">
        <div class="flex flex-col gap-0.5">
          <span class="block font-bold lg:text-3xl"><?= $post['title'] ?></span>



          <span class="block text-sm text-gray-500"><?= $post['date'] ?></span>
          <span class="block text-sm text-gray-500"><?= substr($post["start_time"], 0, 5); ?>〜<?= substr($post["end_time"], 0, 5); ?></span>
          <span class="block text-sm text-gray-500"></span>
        </div>
        <p><?= $post['kisei'] ?></p>
        <p><?= $post['name'] ?></p>
        <p><?= $post['description'] ?></p>
        <form action="">
          <a href="../event/event_info/event_delete.php?id=<?= $post['relation_id'] ?>" class="inline-block rounded-lg border bg-white px-4 py-2 text-center text-sm font-semibold text-gray-500 outline-none ring-indigo-300 transition duration-100 hover:bg-gray-100 focus-visible:ring active:bg-gray-200 md:px-8 md:py-3 md:text-base">キャンセル</a>
        </form>
      </div>


    <? } ?>
  </div>
</div>
</div>
