<?php
$index = $_GET['b'];
$user = $_GET['a'];
include_once '../models/database_user_info.php';
add_index($user,$index);
?>