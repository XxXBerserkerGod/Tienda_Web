<?php
include("../../../Modelo/conexion.php");
$nombre_categoria = $_POST["nombre_categoria"];
$estado_categoria = 1;

//directorio destino

$directorio_destino = "../../../img/Categorias";
//img principal
$img_categoria_name = $_FILES['img_catg']['name'];
$img_categoria_RI = $_FILES['img_catg']['tmp_name'];
$ruta_destinocat = $directorio_destino . '/' . $img_categoria_name;
$rd_Absoluta = "/Tienda_Web/img/Categorias" . '/' . $img_categoria_name;
move_uploaded_file($img_categoria_RI, $ruta_destinocat);


$sqlc = "INSERT INTO categoria (nombre_categoria,img_catg,estado_categoria)
VALUES ('$nombre_categoria','$rd_Absoluta',$estado_categoria)";
$conn->query($sqlc);
header('location:../../../Vista/Administrador/crud_categoria/Categoria.php');
