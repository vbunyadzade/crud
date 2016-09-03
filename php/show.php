<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<style type="text/css">
		td{
			padding: 10px;
			border:1px dotted black;
		}
		.hre{
			margin-left: 300px;
			margin-top: 20px;
		}
		img{
			width: 100px;

		}
	</style>
</head>
<body>
<a href="insert.php" name="create" class="btn btn-success hre" >CREATE</a>
<table>
	<thead>
		<tr>
			<td>ID:</td>
			<td>AUTHOR:</td>
			<td>TEXT:</td>
			<td>VIEW:</td>
			<td>DATE:</td>
			<td>PHOTO:</td>
		</tr>
	</thead>

<tbody>


<?php
include 'config.php';
$show = $connect->select("php");
$target="../images/";
while ($row = mysqli_fetch_assoc($show)) {
	?>

			<tr>
			<td><?=$row['id']?></td>
			<td><?=$row['author']?></td>
			<td><?=$row['text']?></td>
			<td><?=$row['date']?></td>
			<td><?=$row['view']?></td>
			<td><img src="<?= $target.$row['src']?>"></td>
			<td><a href="update.php?id=<?=$row['id']?>" class="btn btn-primary">Update</a></td>
			<td><a href="delete.php?id=<?=$row['id']?>" class="btn btn-danger">Delete</a></td>
			</tr>
	<?php
}
?>

</tbody>
</table>
</body>
</html>