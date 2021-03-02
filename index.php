

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Formulario registro</title>
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<<body background="https://cdn.wallpapersafari.com/17/38/owifXF.jpg">

<section class="contenedor"> 

<center> <h4> FORMULARIO DE REGISTRO <p>CLIENTES</p> </h4>

    
<form action="conn/create.php" method="POST" >


<align="left">Nombres:  <input class="controles" type="text" name="nombres"   placeholder="escriba su nombre ">
<align="left">Apellidos:<input class="controles" type="text" name="apellidos" placeholder="Escribir Apellidos" required="required" />
<align="left">Fecha:    <input class="controles" type="date" name="fechana" placeholder="Fecha Nacimiento" required="required" />
<align="left">Dirección:<input class="controles" type="text" name="direccion" placeholder="Escribir Direccion" required="required" />
<align="left">Email :   <input class="controles" type="text" name="email" placeholder="Escribir email" required="required" />
<align="left">Cedula:   <input class="controles" type="int"  name="cedula"     placeholder="escriba su cedula ">
<align="left">Sexo:     <input  type="radio" name="sexo"  value="Hombre" required="required" />Hombre
						<input  type="radio" name="sexo"  value="Mujer" required="required" />Mujer<p align="left">
<!-- Aquí puedes escribir tu comentario <align="left">Mensaje:<textarea rows="10" cols="40" name="mensaje" placeholder="Escribir Mensaje" required="required"></textarea><p align="left">-->

						<input class="boton" type="submit" name="grabar" value="Guardar" />
						<input class="boton" type="reset" name="limpiar" value="Eliminar" />  
						<a class="boton"     href="clientes.php"> Buscar</a>
					
						
</section> 
 
</form>
</fieldset>
</div>
</center>

