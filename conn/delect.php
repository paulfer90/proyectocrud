<?php require_once('conexion.php'); 

$id=$_REQUEST['id'];

$sql="DELETE FROM persona WHERE id ='$id'";
	$query=mysqli_query($conn,$sql) or die("NO SE GUARDARON DATOS");
	mysqli_close($conn,$query);
	header("location: ../index.php");



?>