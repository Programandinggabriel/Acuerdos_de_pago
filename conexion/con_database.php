<?php

$nombreServidor = "localhost";
$baseDatos = "datos_acuerdos";
$nombreUs = "root";
$contraseña = "";

// mysqli_connect(nombre de serivor, nombre de usuario, contraseña, nombre de la base datos)

$conexion = mysqli_connect($nombreServidor, $nombreUs, $contraseña, $baseDatos);

if (!$conexion){
    die("Conexion fallida: " .mysqli_connect_error());
}
?>