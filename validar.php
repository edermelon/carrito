<?php
include('db.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","carrito_de_compras");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:tienda.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
