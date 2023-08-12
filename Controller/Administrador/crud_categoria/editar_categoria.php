<?php
include("../../../Modelo/conexion.php");
$id_categoria  = $_POST["idcat_e"]; 
$nombre_categoria = $_POST["nombre_categoria_e"];
$estado_categoria =1;
// Directorio destino
$directorio_destino = "../../../img/Categorias";
$img_principal_name = $_FILES['img_catg_e']['name'];
$img_principal_RI = $_FILES['img_catg_e']['tmp_name'];
$ruta_destinoprinc = $directorio_destino . '/' . $img_principal_name;
$rdp_Absoluta = "/Tienda_Web/img/Categorias" . '/' . $img_principal_name;
if (!empty($img_principal_name)) {
    move_uploaded_file($img_principal_RI, $ruta_destinoprinc);
}

$sql = "UPDATE  categoria SET nombre_categoria = '$nombre_categoria', estado_categoria = 1";

if (!empty($img_principal_name)) {
    $sql .= ", img_catg = '$rdp_Absoluta'";
}

$sql .=" WHERE id_categoria  = $id_categoria";

$conn->query($sql);
header('location:../../../Vista/Administrador/crud_categoria/Categoria.php');
?>
