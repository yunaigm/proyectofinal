<?php 
$host = "localhost"; 
$database = "finalproject"; 
$user = "root"; 
$password = "";
$conexion = mysqli_connect($host, $user, $password,$database);

if (!$conexion) 
  die("No ha podido realizarse la conexión".mysqli_connect_error());

//mysqli_close($conexion); //cierra la BBDD
?>

