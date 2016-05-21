<?php
$data = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
$data1 = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
$data2 = new mysqli("mysql.hostinger.co.uk","u463543975_mash","karakesek","u463543975_dubs");
if($_GET['n'] && $_GET['s']){
	?>
	<form action='' method='post'>
	Source:<br>
		<input type="text" name="sr"><br>
	Lyrics:<br>
		<textarea name="val"></textarea><br>
		<input type="submit" name="subs" value="add">
	</form>
	<?php
}else{
$sql = $data->query("SELECT * FROM `zapros` WHERE `dat`='0'");
while($row = $sql->fetch_assoc()){
	printf("<div>
		<a href='?n=%s&s=%s'>%s by %s</a>
		</div>",$row['name'],$row['idnew'],$row['idnew'],$row['name']);
}}
if($_POST['subs']){
	$tr = parse_nope($_POST['val']);
	$date = date("Y-m-d");
	$data->query("UPDATE `files_all` SET  `access` =  '1',`source`='$_POST[sr]',`file_src`='$_POST[sr]' WHERE `whose`='$_GET[n]' AND `name`='$_GET[s]'");
	$data1->query("INSERT INTO `publishes` (`name`, `date`, `source`, `whose`, `file_name`) VALUES ('$_GET[s]', '$date','$tr' ,'$_GET[n]', '$_POST[sr]')");
	$data->query("UPDATE `zapros` SET  `dat` =  '1' WHERE `name`='$_GET[n]' AND `idnew`='$_GET[s]'");
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
	?>