<?php
	include_once('db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Of All Books</title>
	<link href="/library/stylesheets/style.css" type="text/css" rel="stylesheet">

</head>
<body>
	<?php include_once('menu.php'); ?>
	
<center>
	<div class="login2">
		List Of All Books
	</div>
	<div class="login2">
		<table>
		
			<td class="bold"><b>Nam</b></td>
			<td class="bold"><b>Author</b></td>
			<td class="bold"><b>Transletor</b></td>
			<td class="bold"><b>File</b></td>

		
		</table>

	<?php

		if (isset($_GET["id"])){
		$inputId = $_GET["id"];
		$selectRecord = $db->query("SELECT * FROM posts WHERE id=$inputId");
		
	}else{
		$inputId=0;
	}

?>

<?php 
	$selectOptions = $db->query("SELECT * FROM books");
	foreach ($selectOptions as $row ){
		$id 		 = $row['id'];
		$name 		 = $row['name'];
		$author 	 = $row['author'];
		$transleator = $row['transleator'];
		$file		 = $row['file'];
?>

<table>


	<td><a href="book.php?id=<?php echo $id; ?>"><?php echo $name;?></td>
	<td> <a onclick="<?php echo "<script>alert('its done');</script>"; ?>"><?php echo $author;?></td>
	<td><?php echo $transleator;?></td>
	<td><?php echo $file;?></td>
	

</table>
<?php
}	
?>

</div>
</center>

</body>
</html>