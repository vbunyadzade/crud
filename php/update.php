<?php

include "config.php";
$id=$_GET['id'];

$a= $connect->select("php","$id");
$row=mysqli_fetch_assoc($a);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	input{
		padding: 5px 15px;
		margin-top:10px;
		display: block;
	}
	textarea{
		width: 600px;
		height: 200px;
		margin-top: 10px;
	}
</style>
<body>
<form action="update2.php" method="post" enctype="multipart/form-data">
	<input type="text" name="author" value="<?=$row['author'] ?>">
	<textarea type="text" name="text"><?=$row['text'] ?></textarea>
	<input type="file" name="file">
	<input type="hidden" name="image" value="<?=$row['src']?>">
	<input type="hidden" name="id" value="<?= $id?>">
	<input type="submit" name="submit">
</form>
</body>
</html>
