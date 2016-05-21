<?php
	if(isset($_FILES["avatar"]["type"])){
		$name_new = "";
		for ($i=0; $i < 15; $i++) {
			$ra = rand(97,122);
			$name_new .= chr($ra);
		}
		$name_new .= ".jpg";
		if(move_uploaded_file($_FILES['avatar']['tmp_name'],$name_new)){
			echo "File success";
		}
		else{
			echo "File failed";
		}
	}
	else{
		echo "NOPE";
	}
?>