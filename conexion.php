<?php

// la idea es intentar la conexión con phpmyadmin
// declaro las variables para la conexión.

$servidor="localhost";
$usuario="root";
$contrasenia="";
$base_de_datos="bd_prueba";

// creo la conexión

$conexion=new mysqli($servidor,$usuario,$contrasenia,$base_de_datos);

//verifico si me conecto a la base de datos

if($conexion->connect_error){
    die("Conexión Fallida:".$conexion->connect_error);   
} 




?>