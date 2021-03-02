<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Formulario de Registro</title>

</head>
<body bgcolor="#CCCCCC" >


<?php require_once('conexion.php'); 
  $id=$_REQUEST['id'];
  $sql="SELECT * FROM persona WHERE id='$id'";
  $vista=mysqli_query($conn,$sql) or die ("No Se Mostraron DATOS");
  $ver=mysqli_fetch_assoc($vista)

?>



<h1><p align="center">CRUD EN EL FORMULARIO PHP Y MYSQL</p></h1>
<center>
<div  id="centro">
<fieldset style="width:400px; height:500px;">
  
    <legend>FORMULARIO DE REGISTRO</legend>
    
    <form action="update.php?id=<?php echo $ver["id"];?>"  method="POST" >

    <p align="left">     Nombres :  <input type="text" name="nombres"  required="required" value="<?php echo $ver['nombre']?>" /></p>
    <div align="left">   Apellidos: <input type="text" name="apellidos"  required="required" value="<?php echo $ver['apellidos']?>"/>
    <p align="left">     Fecha:     <input type="date" name="fechana"  required="required" value="<?php echo $ver['fechanaci']?>"/>
    <p align="left">     Dirección: <input type="text" name="direccion"  required="required" value="<?php echo $ver['direccion']?>"/>
      <p align="left">   Email:     <input type="text" name="email"  required="required" value="<?php echo $ver['email']?>" />
        <p align="left"> Cedula:    <input type="int" name="cedula"  required="required" value="<?php echo $ver['cedula']?>" /></p>
      <p align="left">   Sexo :     <input type="radio" name="sexo"  value="Hombre" required="required" 
        <?php if ($ver['sexo']=='H') echo "checked"; ?>/>Hombre
      <input type="radio" name="sexo"  value="Mujer" required="required" <?php if ($ver['sexo']=='M') echo "checked"; ?>/>Mujer<p align="left">
     
        <input type="submit" name="grabar" value="Guardar cambios" />
        <a href="../index.php" title="Cancelar"><input type="button" name="limpiar" value="Cancelar" /></a> 
</form>
</fieldset>
</div>
</center>