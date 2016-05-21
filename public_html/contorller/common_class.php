<?php
session_start();
/**
* Creating the main class
*/
class Users_in
{
	private $a = 0;
	function __construct($t)
	{
		$this->a = $t;
		if($this->a == 0){
			return $this->main_views();
		}
		elseif($this->a == 1){
			include_once "models/database_user_info.php";
			show_all_users();
		}
		elseif($this->a == 2){
			$this->show_files();
		}	
		elseif($this->a == 3){
			require_once "views/in_site.php";
		}
		elseif($this->a == 4){
			return $this->main_page();
		}
		elseif($this->a == 6){
			return $this->news();
		}
		elseif($this->a == 7){
			return $this->admin_info();
		}
	}

	public function main_page(){
		require_once 'views/index_page.html';
	}
	public function add($a1,$a2,$a3,$a4){
		echo $a1;
		echo "<br>";
		echo $a2;
		echo "<br>";
		echo $a3;
		echo "<br>";
		echo $a4;
		echo "<br>";
	}
	public static function main_views(){
		require_once "views/main_page.html";
	}
	public function show_files(){
		include_once 'models/database_user_info.php';
		show_all_files();
	}
	public function news(){
		include_once "models/database_user_info.php";
		show_publishes();
	}
	public static function admin_info(){
		include_once 'models/database_user_info.php';
		show_admin();
	}
}
?>