<!-- 参加者イベント一覧 バックエンド -->
<?
require_once(dirname(__FILE__) . '/../dbconnect.php');
// $id = $_SESSION['id'];
// セッションでログインしているuserのidを取得
$id = 1;

$sql = "SELECT id,title,date,start_time,end_time,kisei,description,author_id,created_at FROM event INNER JOIN users ON event.id = users.id INNER JOIN user_event_relation as uer ON event.id = uer.event_id WHERE uer.user_id = $id and uer.status_id = 1";
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

<div class="project">
      <div class="">
        <h3 class="text-xl p-2 project-text w-3/4 rounded-lg text-center text-2xl">参加イベント一覧</h3>

        <?php foreach($posts as $post){ ?>
          <div class="p-5 w-full">

          <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-purple-200 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 m-3">
            <div class="flex flex-col justify-between p-4 leading-normal w-full">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $post['date'] ?></h5>

                <div class="p-5 flex justify-around ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $post['title'] ?></h5>
                <p class="mb-3 font-normal text-gray-700 text-2xl dark:text-gray-400">  <?= $post['kisei']?></p>

                </div>

            </div>
          </a>

        </div>

        <?} ?>


      </div>
    </div>
  </div>
  .


  


    
