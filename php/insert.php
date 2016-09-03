<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">
		.te{
			margin-top:10px;
			padding: 5px 15px;
		}
	</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
	<input class="te" type="text" name="author" placeholder="Author"><br>
	<textarea class="te" type="text" name="text" placeholder="Text"></textarea><br>
	<input class="btn " type="file" name="src"><br>
	<input class="btn btn-primary" type="submit" name="submit" value="Gonder">


</form>
</body>
</html>



<?php
include "config.php";
if (isset($_POST['submit'])) {
	$author = $_POST['author'];
	$text  = $_POST['text'];

$target_dir="../images/";
$target_file= date('dmYGis') . basename($_FILES['src']['name']);
move_uploaded_file($_FILES['src']['tmp_name'], $target_dir.$target_file);


$connect->insert("php","author,text,src","'$author','$text','$target_file'");

if($connect){
	header("Location:show.php");
}else{
	echo "Error";
}
}
?>