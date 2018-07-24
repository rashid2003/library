<?php
	
	session_start();
	$db = new mysqli ("localhost",'root','','library');
	$db->query("SET charset SET utf8");

	if(isset($_POST["logbtn"])){
		
		$username = $_POST["username"];
		$password = md5($_POST["password"]);

		$selectQuery = $db->query("SELECT * FROM users WHERE username='$username' AND password='$password' ");
		if ($selectQuery->num_rows>0){
			//echo 'done';
			$_SESSION["user_login"]=$username;
			header("location:books.php");

		}
	}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Login - Obaid Library</title>

<link href="/library/stylesheets/style.css" type="text/css" rel="stylesheet">

</head>

<body>

    <?php include_once('menu.php');?> 

	<center>


		<?php include_once('loginform.php');?> 



	</center>
</body>
</html>



