<?php

include('../connection/connection.php');
//print_r($_POST);
if(isset($_POST['enviar'])){

    $phpNombre = $_POST['inputNombre'];
    $insertFabricantes = "INSERT INTO fabricante (nombre) VALUE ('$phpNombre')";
    $resultado = mysqli_query($connection,$insertFabricantes);
}
header('location: ../fabricantes.php')


?>