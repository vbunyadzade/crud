<?php
include "config.php";

$id=$_GET['id'];
$a =$connect->delete("php","$id");
if($a){
	header("Location:show.php");
}else{
	echo "Error";
}

?>