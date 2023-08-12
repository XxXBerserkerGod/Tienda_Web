<?php
include("../../../Modelo/conexion.php");
$nombre_producto = $_POST["nombre_producto"];
$descripcion = $_POST["descripcion"];
$precio_producto = $_POST["precio_producto"];
$stock = $_POST["stock"];

$codigo_estado = $_POST["codigo_estado"];
$id_marca = $_POST["id_marca"];
$id_categoria = $_POST["id_categoria"];

//directorio destino
//1=Maquillaje,2=Perfumes,3=Cuidado Personal,4=Ropa
$directorio_destino = "";
$Ruta_Abs = "";
if ($id_categoria == 1) {
    $directorio_destino = "../../../img/Productos/Maquillaje";
    $Ruta_Abs = "/Tienda_Web/img/Productos/Maquillaje";
} else if ($id_categoria == 2) {
    $directorio_destino = "../../../img/Productos/Perfumes";
    $Ruta_Abs = "/Tienda_Web/img/Productos/Perfumes";
} else if ($id_categoria == 3) {
    $directorio_destino = "../../../img/Productos/Cuidado Personal";
    $Ruta_Abs = "/Tienda_Web/img/Productos/Cuidado Personal";
} else if ($id_categoria == 4) {
    $directorio_destino = "../../../img/Productos/Ropa";
    $Ruta_Abs = "/Tienda_Web/img/Productos/Ropa";
} else {
    $directorio_destino = "../../../img/Productos";
    $Ruta_Abs = "/Tienda_Web/img/Productos";
}
//img principal
$img_principal_name = $_FILES['img_principal']['name'];
$img_principal_RI = $_FILES['img_principal']['tmp_name'];
$ruta_destinoprinc = $directorio_destino . '/' . $img_principal_name;
$rdp_Absoluta = $Ruta_Abs . '/' . $img_principal_name;
move_uploaded_file($img_principal_RI, $ruta_destinoprinc);
//Sub imagen 1
$img_uno_name = $_FILES['img_uno']['name'];
$img_uno_RI = $_FILES['img_uno']['tmp_name'];
$ruta_destinos1 = $directorio_destino . '/' . $img_uno_name;
$rds1_Absoluta = $Ruta_Abs . '/' . $img_uno_name;
move_uploaded_file($img_uno_RI, $ruta_destinos1);
//sub imagen 2
$img_dos_name = $_FILES['img_dos']['name'];
$img_dos_RI = $_FILES['img_dos']['tmp_name'];
$ruta_destinos2 = $directorio_destino . '/' . $img_dos_name;
$rds2_Absoluta = $Ruta_Abs . '/' . $img_dos_name;
move_uploaded_file($img_dos_RI, $ruta_destinos2);
//------

$precio_oferta = isset($_POST['precio_oferta']) ? $_POST['precio_oferta'] : null;
$fecha_caducidad = isset($_POST['fecha_caducidad']) ? $_POST['fecha_caducidad'] : null;
$id_talla = isset($_POST['id_talla']) ? $_POST['id_talla'] : null;
$id_color = isset($_POST['id_color']) ? $_POST['id_color'] : null;


//Categoria =1.oferta,2.bueno,3.malo,4.caducado
$sqlc = "INSERT INTO producto (nombre_producto,precio_producto,stock,img_principal,img_uno,img_dos,codigo_estado,id_marca,id_categoria,precio_oferta,fecha_caducidad,
id_talla,id_color,descripcion) VALUES ('$nombre_producto',$precio_producto,
$stock,'$rdp_Absoluta','$rds1_Absoluta','$rds2_Absoluta',$codigo_estado,
$id_marca,$id_categoria," . ($precio_oferta !== null ? "'$precio_oferta'" : "NULL") . "," . ($fecha_caducidad !== null ? "'$fecha_caducidad'" : "NULL") . ", " . ($id_talla !== null ? "'$id_talla'" : "NULL") . ", " . ($id_color !== null ? "'$id_color'" : "NULL") . ",'$descripcion')";
$conn->query($sqlc);
header('location:../../../Vista/Administrador/crud_producto/Productos.php');
