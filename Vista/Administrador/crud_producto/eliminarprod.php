<?php 
include("../../../Modelo/conexion.php");
$id_producto=$_POST["id_producto"];
$sql = "UPDATE producto SET codigo_estado=5;
        WHERE id_producto  = '$id_producto'";
$conn->query($sql);
echo $id_producto;
header('location:Productos.php');

?>