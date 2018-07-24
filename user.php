<?php
	include_once('db.php');


	if (isset($_GET["id"])){
		$inputId = $_GET["id"];
		$selectRecord = $db->query("SELECT * FROM users WHERE id=$inputId");
		$recordRow    = $selectRecord->fetch_array();
		$username    = $recordRow['username'];
		$name    = $recordRow['name'];
		$lname    = $recordRow['lname'];
		$email    = $recordRow['email'];

	}else{
		$inputId=0;
	}


  

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="/library/stylesheets/style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<?php include_once('menu.php'); ?>
	<center>
		<div class="book4">	<h1><?php echo $name; ?></h1></div>


	<div class="login3">

		<p style="text-align: right; font-size: 20px;"><b> :  اطلاعات اجمالی </b></p>

		<table>


	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;"> username </td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;"> name </td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;"> last name </td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;"> email </td>
		<tr>
		

			<td><a href="book.php?id=<?php echo $id; ?>"><?php echo $username;?></td>		
	        <td><?php echo $name;?></td>
		    <td><?php echo $lname;?></td>
			<td><?php echo $email;?></td>




	
		</tr>
</table>


	<p style="text-align: right; font-size: 20px;"><b> : مقدمه </b></p>

</div>
<div class="boxauthor">
	
</div>
</center>

</body>
</html>


















