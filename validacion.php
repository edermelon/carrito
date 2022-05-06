<?php
    include('conexion.php');

    session_start();

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND password = '$password'";
    $resultado = $conexion->query($sql);

    $row = $resultado->fetch_assoc();

    if($row['nombre'] == $nombre && $row['password'] == $password){
        $_SESSION['nombre'] = $nombre;
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }


?>