<?php
	include_once('db.php');
	if (isset($_POST["savbtn"])){
		$name 			= $_POST["name"];
		$author 		= $_POST["author"];
		$transleator 	= $_POST["transleator"];
		$file 			= $_POST["file"];
		$titer 			= $_POST["titer"];
			$intoBOOK = $db->query("INSERT INTO books (name,author,transleator,file,titer) VALUES ('$name','$author','$transleator','$file','$titer') ");
			if ($intoBOOK == true ){
				echo "OK!";
			}else{
				echo "Not Ok!";
			}
 	}
 ?>
