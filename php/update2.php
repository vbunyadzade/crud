<?php
include "config.php";
if(isset($_POST['submit'])){
	$author =$_POST['author'];
	$text= $_POST['text'];
	$id = $_POST['id'];
	
	if($_FILES ==[]){
		$image=$_POST['image'];
	}else {
		$image=$_FILES['file'];
	}
}



?>