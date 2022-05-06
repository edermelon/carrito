<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "carrito_de_compras";
    $conexion = new mysqli($servidor, $usuario, $password, $db);

    if($conexion->connect_error){
        die("Conexión fallida: " . $conexion->connect_error);
    }


?>