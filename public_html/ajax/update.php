<?php 
$a = $_POST['to'];
$b = $_POST['val'];
$c = $_POST['user'];
include_once "../models/database_user_info.php";
save_now($b,$a,$c);

?>