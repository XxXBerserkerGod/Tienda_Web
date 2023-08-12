<?php
include("../../../Modelo/conexion.php");
$nombre_marca = $_POST["nombre_marca"];
$estado_marca = 1;
//directorio destino
$directorio_destino = "../../../img/Marcas";
//img principal
$img_marca_name = $_FILES['img_marca']['name'];
$img_marca_RI = $_FILES['img_marca']['tmp_name'];
$ruta_destinomarca = $directorio_destino . '/' . $img_marca_name;
$rd_Absoluta = "/Tienda_Web/img/Marcas" . '/' . $img_marca_name;
move_uploaded_file($img_marca_RI, $ruta_destinomarca);

$sqlc = "INSERT INTO marca (nombre_marca,img_marca,estado_marca)
VALUES ('$nombre_marca','$rd_Absoluta',$estado_marca)";
$conn->query($sqlc);
header('location:../../../Vista/Administrador/crud_marca/Marca.php');
