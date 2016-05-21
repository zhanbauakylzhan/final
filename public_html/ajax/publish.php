<?php
$a = $_POST['who'];
$b = $_POST['name'];
$c = $_POST['them'];
include_once '../models/database_user_info.php';
publish_it($a,$b,$c);
?>