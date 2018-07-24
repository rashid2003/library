<?php
	include_once 'db.php';
	if (isset($_POST['subtn'])){
		$name 		= $_POST['name'];
		$lname 		= $_POST['lname'];
		$username   = $_POST['username'];
		$email 		= $_POST['email'];
		$pass 		= md5($_POST['password']);
			$intouser = $db->query("INSERT INTO users (name,lname,username,email,password) VALUES ('$name','$lname','$username','$email','$pass') ");
			if ($intouser){
				echo "OK! Please cheak your email";
				# code...
			}else{
				echo "Sorry! We can not sign up you";
			}

	}
?>




	
