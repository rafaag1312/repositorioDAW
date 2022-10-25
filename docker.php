<?php

$usuario = "root";
$contraseña = "notSecureChangeME";
$servidor = "db";
$database ="mysql";

$conexion = mysqli_connect($servidor, $usuario, $contraseña, $database);

if(!$conexion){
   
    die('Conexion fallida'.mysqli_connect_error());
}
else{
    echo("hello world");
}
?>
