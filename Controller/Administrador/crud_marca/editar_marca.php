<?php
include("../../../Modelo/conexion.php");
$id_marca  = $_POST["idmarca_e"]; 
$nombre_marca = $_POST["nombre_marca_e"];
$estado_marca =1;
// Directorio destino
$directorio_destino = "../../../img/Marcas";
$img_principal_name = $_FILES['img_marca_e']['name'];
$img_principal_RI = $_FILES['img_marca_e']['tmp_name'];
$ruta_destinoprinc = $directorio_destino . '/' . $img_principal_name;
$rdp_Absoluta = "/Tienda_Web/img/Marcas" . '/' . $img_principal_name;
if (!empty($img_principal_name)) {
    move_uploaded_file($img_principal_RI, $ruta_destinoprinc);
}

$sql = "UPDATE  marca SET nombre_marca = '$nombre_marca', estado_marca = 1";

if (!empty($img_principal_name)) {
    $sql .= ", img_marca  = '$rdp_Absoluta'";
}
$sql .=" WHERE id_marca   = $id_marca";

$conn->query($sql);
header('location:../../../Vista/Administrador/crud_marca/Marca.php');
