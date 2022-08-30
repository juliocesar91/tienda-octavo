<?php

//datos de la db

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda';

// query para la conexion a la db

$connection = mysqli_connect($hostname,$username,$password,$database);

// validador de conexion de la BD

if(mysqli_connect_error()){
   echo 'conexion fallida';
}else{
 //   echo 'conexion exitosa';
}






?>