
<!DOCTYPE html>
<html>
<head>
	<title>registro de usuarios </title>
</head>
<body>
<section class="conte"> 
<center>
<fieldset style="width:600px; height:700px;">
<body background="https://cdn.wallpapersafari.com/17/38/owifXF.jpg">


<link rel="stylesheet" type="text/css" href="estilos.css">



<h1 class="titulo"><legend>LISTA<p>DE</p>  CLEINTES</legend></h1>

<a class="boton"     href="buscar.php"> Buscar</a>


<?php 
require_once("conn/conexion.php");
$sql="SELECT * FROM persona";
$vista= mysqli_query($conn,$sql)or die ("NO HAY DATOS PARA MOSTRAR");
?>
<TABLE border="3">
<tr class="letras">
 
<td>Nombres</td>
<td>Apellidos</td>
<td>Fecha</td>
<td>Direccion</td>
<td>Email</td>

<td>Cedula</td>
<td>Sexo</td>
<td>Editar</td>
<td>Eliminar</td>

</tr>
<?php
  while($ver=mysqli_fetch_array($vista)) {
?>

<tr>

<td><?php echo $ver['nombre']?></td>
<td><?php echo $ver['apellidos']?></td>
<td><?php echo $ver['fechanaci']?></td>
<td><?php echo $ver['direccion']?></td>
<td><?php echo $ver['email']?></td>
<td><?php echo $ver['cedula']?></td>
<td><?php echo $ver['sexo']?></td>


<td ><a href="javascript:void(0);" onClick="window.location='conn/editar.php?id=<?php echo $ver['id'];?>';" title="Editar Registro">Editar</td>
<td><a href="javascript:void(0);" onClick="window.location='conn/delect.php?id=<?php echo $ver['id'];?>';" title="Eliminar Registro">Eliminar</td>




</tr>
<?php
}
?>
</section> 

</TABLE>
</fieldset>
</center>
</body>
</html>
