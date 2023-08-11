<?php
include("../../../Modelo/conexion.php");
$id_usuario = $_POST["idusu"];
$sql = "UPDATE usuario SET estado_usu= 0
        WHERE id_usu  = $id_usuario";
$conn->query($sql);
echo $id_producto;
header('location:usuarios.php');
