<?php

$uid = $_POST['id'];
print_r($uid);

header("Location: http://localhost:8080/user/user_info/user_disp.php?id= $uid");
exit();
?>
