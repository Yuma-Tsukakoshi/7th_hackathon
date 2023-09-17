<?php

require_once(dirname(__FILE__) . '../../../dbconnect.php');


// 削除リンクからIDを取得
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // データベースから指定されたIDのレコードを削除するクエリを実行
    try {
        $sql = "DELETE FROM user_event_relation WHERE id = :id"; // your_table_name を実際のテーブル名に置き換える
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        header("Location: http://localhost:8080/user/event_list.php");
    } catch (PDOException $e) {
        echo "データの削除に失敗しました: " . $e->getMessage();
    }
} else {
    echo "削除対象のIDが指定されていません。";
}
?>





