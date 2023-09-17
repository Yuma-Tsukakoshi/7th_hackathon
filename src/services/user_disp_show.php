<?php
require_once(dirname(__FILE__) . '/../dbconnect.php');

$uid = $_POST['uid'];

header("Location: http://localhost:8080/user/user_info/user_disp.php?id=" . urlencode($uid));
exit();
?>