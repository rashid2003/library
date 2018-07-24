<!DOCTYPE html>
<html>
<head>
	<title>Index Of Obaid Library</title>
	<link href="/library/stylesheets/style.css" type="text/css" rel="stylesheet">

</head>
<body>
	<?php include_once('menu.php'); ?>
	
<center>
	<div class="login2">
		List Of All Users
	</div>
	<div class="login2">
		<table>
		
			<td class="bold"><b>username</b></td>
			<td class="bold"><b>name</b></td>
			<td class="bold"><b>last name</b></td>
			<td class="bold"><b>email</b></td>

		
		</table>

	<?php
	include_once('db.php');

		if (isset($_GET["id"])){
		$inputId = $_GET["id"];
		$selectRecord = $db->query("SELECT * FROM users WHERE id=$inputId");
		
	}else{
		$inputId=0;
	}

?>

<?php 
	$selectOptions = $db->query("SELECT * FROM users");
	foreach ($selectOptions as $row ){
		$id 		 = $row['id'];
		$name 		 = $row['name'];
		$lname		 = $row['lname'];
		$username    = $row['username'];
		$email		 = $row['email'];
?>

<table>


	
	
	
	
	<td><a href="user.php?id=<?php echo $id; ?>"><?php echo $username;?></td>

	<td><?php echo $name;?></td>
	<td><?php echo $lname;?></td>
	<td><?php echo $email;?></td>
	

</table>
<?php
}	
?>

</div>
</center>

</body>
</html>