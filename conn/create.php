<?php
require_once('conexion.php'); /*llamando datos de la conexion.php*/

$nombres= $_POST['nombres'];
$apellidos=$_POST['apellidos'];
$fechana=$_POST['fechana'];
$direccion=$_POST['direccion'];
$email=$_POST['email'];
$cedula= $_POST['cedula'];
$sexo=$_POST['sexo'];

/*aqui se realizara la consulta para insertar datos*/

$sql="INSERT INTO persona VALUES('','$nombres','$apellidos','$fechana','$direccion','$email','$cedula', '$sexo')";
$query=mysqli_query($conn,$sql) or die("NO SE GUARDARON DATOS");
mysqli_close($conn,$query);
header("location: ../index.php");

?>