<?php
	require_once('conexion.php');

	$id=$_REQUEST['id'];

	
	$nombres= $_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$fechana=$_POST['fechana'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$cedula= $_POST['cedula'];
	$sexo=$_POST['sexo'];
	

	 /*aqui se realizara la consulta para insertar datos*/
	$sql="UPDATE persona SET  nombre ='$nombres', apellidos = '$apellidos', fechanaci='$fechana', direccion='$direccion', email='$email',cedula= '$cedulas', sexo='$sexo' WHERE id ='$id'";
	$query=mysqli_query($conn,$sql) or die("NO SE GUARDARON DATOS");
	mysqli_close($conn,$query);
	header("location: ../index.php");



?>