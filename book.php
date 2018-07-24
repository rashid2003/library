<?php
	include_once('db.php');


	if (isset($_GET["id"])){
		$inputId = $_GET["id"];
		$selectRecord = $db->query("SELECT * FROM books WHERE id=$inputId");
		$recordRow    = $selectRecord->fetch_array();
		$name    = $recordRow['name'];
		$author     = $recordRow['author'];
		$transleator     = $recordRow['transleator'];
		$file     = $recordRow['file'];
		$titer     = $recordRow['titer'];
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


	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;">کتاب</td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;">مترجم</td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;">نویسنده</td>
	<td style=" box-shadow: 0px 0px 5px 0px black; text-align: center;">نام کتاب </td>
		<tr>
		
	<td><?php echo $file;?></td>
	<td><?php echo $transleator;?></td>
	<td><?php echo $author;?></td>
	<td><a href="book.php?id=<?php echo $id; ?>"><?php echo $name;?></td>		
	
		</tr>
</table>


	<p style="text-align: right; font-size: 20px;"><b> : مقدمه </b></p>
   <p><?php echo $titer; ?></p>
</div>
<div class="boxauthor">
	
</div>
</center>

</body>
</html>


















