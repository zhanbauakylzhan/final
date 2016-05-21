<?php
session_start();
function show_all_users(){

	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");

	if($data->connect_errno){
		printf("Impossible to run. Cause of %s",$data->connect_errno);
		exit();
	}

	$query = "SELECT * from user_info";
	$result = $data->query("SELECT * from user_info");
	$row = $result->fetch_array(MYSQLI_ASSOC);
	echo $row['login'];
	$data->close();
}

function add_index($name,$index){
	$count = 0;
	$name1 = $_SESSION['login'];
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$date = date("Y-m-d");
	$que = sprintf("SELECT * FROM files_all WHERE `file_src`='%s' AND `whose`='%s'",$index,$name1);
	$dat1 = $data->query($que);
	$res = $dat1->fetch_row();
	if(isset($res[2])){
		$count += 1;
	}
	else{
		$query = sprintf("INSERT INTO `files_all` (`name`, `source`, `access`, `likes`, `date`, `whose`, `file_src`) VALUES ('%s', '', '0', '', '%s', '%s', '')",$index,$date,$name1);
		$data -> query($query);
		$data -> query("INSERT INTO `zapros` (`name`, `idnew`,`dat`) VALUES ('$name1', '$index','0')");
	}

	if($count != 0){
		echo "error";
	}
	else{
		echo find_last($index);

	}
}

function find_last($b){
	$user = $_SESSION['login'];
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$que = sprintf("SELECT * FROM files_all WHERE `file_src`='%s' AND `whose`='%s'",$b,$user);
	$dat1 = $data->query($que);
	$res = $dat1->fetch_array(MYSQLI_ASSOC);
	return $res['id'];

}

function show_all_files(){
	$name = $_SESSION['login'];
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$row = $data->query("SELECT * FROM files_all WHERE `whose`='$name' AND `access`='1'");
	$row1 = $data->query("SELECT * FROM files_all WHERE `whose`='$name' AND `access`='1'");
	$res2 = $row1->fetch_row();
	if($res2[0]==true){	
	while($result = $row->fetch_row()){
		printf("%s<br><audio controls style='width:280px;'><source src='%s' type='audio/mpeg'></audio>",$result[1],$result[7]);
	}
	}else{
		echo "<span id='not_files'>You have no files</span>";
	}
}

function save_now($a,$b,$c){
	if($_SESSION['login']==$c){
		$user = $_SESSION['login'];
	}else{
		$user = $c;
	}
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$kep = parse_nope($a);
	$data->query("UPDATE `files_all` SET `source`='$kep' WHERE `whose`='$user' and `file_src`='$b'");
}

function parse_nope($a){
	$kep = " ";
	$c = 0;
	$d = 0;
	for ($i=0; $i <strlen($a); $i++) {
		if($a[$i] == "'"){
			$kep[$c] = "\ ";
			$kep[$c+1] = "'";
			$c += 1;
		}
		else{
			$kep[$c]=$a[$i-$d];
		}
		$c += 1;
	}
	return $kep;
}

function publish_it($a,$b,$c){
	$user = $_SESSION['login'];
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$date = date("Y-m-d");
	$s = $data->query("SELECT * FROM `files_all` WHERE `whose`='$user' and `file_src`='$b'");
	$r1 = $data->query("SELECT * FROM `publishes` WHERE `whose`='$user' and `file_name`='$b'");
	$r2 = $r1->fetch_row();
	$res = $s->fetch_row();
	$t = $res[2];
	$t = parse_nope($t);
	if($r2[4]!=""){
		$data->query("UPDATE `publishes` set `name`='$c',`date`='$date',`source`='$t' where `whose`='$user' and `file_name`='$b'");
	}
	else{
		$data->query("INSERT INTO `publishes` (`name`, `date`, `source`, `whose`,`file_name`) VALUES ('$c','$date','$t','$user','$b')");
	}
}


function show_publishes(){
	$user = $_SESSION['login'];
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$quer = sprintf("SELECT * FROM `publishes` ORDER BY id DESC");
	$res = $data->query($quer);
	$res1 = $data->query($quer);
	$r2 = $res1->fetch_row();
	if($r2[0] == true){
	while($row = $res->fetch_array()){
		$t2 = $row[2][8].$row[2][9];
		if(date("d") - $t2 == 1){
			$r2 = "Yesterday";
		}
		elseif(date("d")-$t2 == 2){
			$r2 = "Two days later";
		}
		elseif(date("d")-$t2 == 0){
			$r2 = "Today";
		}
		else{
			$r2 = $row[2];
		}
		if($row[4]==$_SESSION['login']){
			printf("<div class='fircalar'><span style='font-size:25px;font-weight:bolder;'>%s</span> by <a class='name_click' href='index.php?name=%s'>@Me</a> <span style='color:blue;'>added %s</span><br><audio controls style='width:600px;'><source src='%s' type='audio/mpeg'></audio>Show the lyrics...<br><input type='image' src='imag/1234.png' style='width:50px; height:50px;' value='%s'  class='yeslei'><div id='%swas' style='width:600px;text-align:center; display:none;'><br>%s</div></div>",$row[1],$row[4],$r2,$row[5],$row[0],$row[0],$row[3]);
		}else{
			printf("<div class='fircalar'><span style='font-size:25px;font-weight:bolder;'>%s</span> by <a class='name_click' href='index.php?name=%s'>@%s</a> <span style='color:blue;'>added %s</span><audio controls style='width:600px;'><source src='%s' type='audio/mpeg'></audio>Show the lyrics...<br><input type='image' src='imag/1234.png' style='width:50px; height:50px;' value='%s'  class='yeslei'><div id='%swas' style='width:600px;text-align:center; display:none;'><br>%s</div><br><input type='hidden' class='files_info' value='help' onclick=helpers('%s','%s','%s');></div>",$row[1],$row[4],$row[4],$r2,$row[5],$row[0],$row[0],$row[3],$row[4],$row[5],$row[0]);	
		}
	}}
	else{
		echo "<span style='margin-left:100px; font-size:35px; color:white;'>Sorry but no one published his/her file to public</span>";
	}
}

function show_admin($a){
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$que = sprintf("SELECT * FROM `user_info` WHERE `login`='%s'",$a);
	$row = $data->query($que);
	$res = $row->fetch_row();
	printf("<img src='%s' width='140px' style='border-radius:150px;' height='140px'><div id='mainka'><a href='#' style='color:white; text-decoration:none; font-size:25px;'>@%s</a><br><br>%s %s <br> <span style='font-size:18px; margin-left:10px;'>%s/%s/%s<br></span>current status => %s<br>rating => %s</div>",$res[5],$res[1],$res[1],$res[3],$res[8],$res[9],$res[10],$res[6],$res[7]);
}

function show_admin_news($r){
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$que = sprintf("SELECT * FROM `publishes` WHERE `whose`='%s'",$r);
	$res = $data->query($que);
	while($row = $res->fetch_array()){
		if($row[4]==$_SESSION['login']){
			printf("<div class='fircalar'><span style='font-size:25px;font-weight:bolder;'>%s</span> by <a class='name_click' href='index.php?name=%s'>@Me</a> <span style='color:blue;'>added %s</span><br><audio controls style='width:600px;'><source src='%s' type='audio/mpeg'></audio>Show the lyrics...<br><input type='image' src='imag/1234.png' style='width:50px; height:50px;' value='%s'  class='yeslei'><div id='%swas' style='width:600px;text-align:center; display:none;'><br>%s</div></div>",$row[1],$row[4],$r2,$row[5],$row[0],$row[0],$row[3]);
		}else{
			printf("<div class='fircalar'><span style='font-size:25px;font-weight:bolder;'>%s</span> by <a class='name_click' href='index.php?name=%s'>@Me</a> <span style='color:blue;'>added %s</span><br><audio controls style='width:600px;'><source src='%s' type='audio/mpeg'></audio>Show the lyrics...<br><input type='image' src='imag/1234.png' style='width:50px; height:50px;' value='%s'  class='yeslei'><div id='%swas' style='width:600px;text-align:center; display:none;'><br>%s</div></div>",$row[1],$row[4],$r2,$row[5],$row[0],$row[0],$row[3]);
		}
	}
}

function login($a,$b){
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$b = md5($b);
	$res = $data->query("SELECT * FROM `user_info` WHERE  `login`='$a' and `password`='$b'");
	$row = $res->fetch_row();
	if($row == True){
		echo "YES";
		$_SESSION['login'] = $a;
		$_SESSION['photo'] = $row[5];
	}else{
		echo "No";
	}
}
function mylens($g){
$a = $g;
$t = 0;
for ($i=0; $i < 20; $i++) { 
	if($a[$i]==""){
		break;
	}
	$t = $t + 1;
}
return $t;
}

function upper($a){
	$s = "";
	for ($i=0; $i < mylens($a) + 1; $i++) { 
		if(ord($a[$i])>96 and ord($a[$i])<123){
			$s .= chr(ord($a[$i])-32);
		}
		else{
			$s .= chr(ord($a[$i]));
		}
	}
	return $s;
}

function add_kills($a,$b,$c,$d,$e,$f,$g,$h,$i,$o){
	$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
	$e = md5($e);
	$res = $data->query("SELECT * FROM `user_info` WHERE `login`='$a'");
	$res2 = $data->query("SELECT * FROM `user_info` WHERE `email`='$d'");
	$row1 = $res->fetch_row();
	$row2 = $res2->fetch_row();
	if($row1[0] == true || $row2[0] == true){
		echo "NO";
	}else{
		$data->query("INSERT INTO `user_info` (`login`,`password`,`name`,`surname`,`avatar`,`status`,`rating`,`day`,`month`,`year`,`email`) VALUES ('$a','$e','$b','$c','$o','',0,$f,'$g',$h,'$d')");
	}
}
?>