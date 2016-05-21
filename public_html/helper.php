<?php

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
echo upper("alfhj");

?>