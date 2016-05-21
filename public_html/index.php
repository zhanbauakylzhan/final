<?php
session_start();
/**
* Hello, this is my own first MVC and hope, that really good site. I will always comment after 
*	every main function. So have an enjoy
*/
include_once "controller/common_class.php"; # here i am using the class, and importing from this link
if(isset($_SESSION['login'])){
	$a = new Users_in(4); # creating the new Object for my deal
}else{
	$b = new Users_in(3);
}
?>