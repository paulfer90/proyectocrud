<?php 
$server="localhost";
$user="root";
$pass="";
$bd="registrar";
$conn=mysqli_connect($server,$user,$pass) or die("ERROR CON EL SERVER");
$bdatos=mysqli_select_db($conn,$bd) or die ("NO HAY BASE DATOS");
	
?>