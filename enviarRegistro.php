<?php
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

$buscarusuario = "SELECT * FROM persona WHERE no_cuenta ='$_POST[no_cuenta]' ";

$resulatdo = $conexion-> query($buscarusuario);
$count=mysqli_num_rows($resulatdo)
if($count == 1){
    echo"El usuario ya esta registrado";
    echo"<a href='index.html'>Nuevo Registro</a>";
}else{
    mysqli_query($conexion,"INSERT INTO persona (
        nombre_usuario)
        VALUES(
            '$POST[nombre_usuario]'
    )");
}
?>