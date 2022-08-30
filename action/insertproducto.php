<?php

include('../connection/connection.php');
//print_r($_POST);
if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputProducto'];
    $phpPrecio = $_POST['inputPrecio'];
    $phpFabricante = $_POST['inputcodigo_fabricante'];
    $insertProducto = "INSERT INTO producto(nombre,precio,codigo_fabricante) VALUE ('$phpNombre','$phpPrecio',$phpFabricante)";
    $resultado = mysqli_query($connection,$insertProducto);
}
header('location: ../productos.php')


?>