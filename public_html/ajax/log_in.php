<?php
$r = $_POST['name'];
$r2 = $_POST['pass'];
include_once "../models/database_user_info.php";
login($r,$r2);
?>