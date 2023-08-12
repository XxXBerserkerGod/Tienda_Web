<?php
include("../../../Modelo/conexion.php");
$id_producto = $_POST["idprod_e"]; 
$nombre_producto = $_POST["nombre_producto_e"];
$descripcion = $_POST["descripcion_e"];
$precio_producto = $_POST["precio_producto_e"];
$stock = $_POST["stock_e"];

$codigo_estado = $_POST["codigo_estado_e"];
$id_marca = $_POST["id_marca_e"];
$id_categoria = $_POST["id_categoria_e"];
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


// Verificaremos las imagenes
$img_principal_name = $_FILES['img_principal_e']['name'];
$img_principal_RI = $_FILES['img_principal_e']['tmp_name'];
$ruta_destinoprinc = $directorio_destino . '/' . $img_principal_name;
$rdp_Absoluta = $Ruta_Abs. '/' . $img_principal_name;
if (!empty($img_principal_name)) {
    move_uploaded_file($img_principal_RI, $ruta_destinoprinc);
}

$img_uno_name = $_FILES['img_uno_e']['name'];
$img_uno_RI = $_FILES['img_uno_e']['tmp_name'];
$ruta_destinos1 = $directorio_destino . '/' . $img_uno_name;
$rds1_Absoluta = $Ruta_Abs. '/' . $img_uno_name;
if (!empty($img_uno_name)) {
    move_uploaded_file($img_uno_RI, $ruta_destinos1);
}

$img_dos_name = $_FILES['img_dos_e']['name'];
$img_dos_RI = $_FILES['img_dos_e']['tmp_name'];
$ruta_destinos2 = $directorio_destino . '/' . $img_dos_name;
$rds2_Absoluta = $Ruta_Abs. '/' . $img_dos_name;
if (!empty($img_dos_name)) {
    move_uploaded_file($img_dos_RI, $ruta_destinos2);
}



$precio_oferta = isset($_POST['precio_oferta_e']) ? $_POST['precio_oferta_e'] : null;
$fecha_caducidad = isset($_POST['fecha_caducidad_e']) ? $_POST['fecha_caducidad_e'] : null;
$id_talla = isset($_POST['id_talla_e']) ? $_POST['id_talla_e'] : null;
$id_color = isset($_POST['id_color_e']) ? $_POST['id_color_e'] : null;

// Construye la consulta SQL para la actualización
$sql = "UPDATE producto SET nombre_producto = '$nombre_producto', descripcion = '$descripcion', precio_producto = $precio_producto, stock = $stock";

if (!empty($img_principal_name)) {
    $sql .= ", img_principal = '$rdp_Absoluta'";
}

if (!empty($img_uno_name)) {
    $sql .= ", img_uno = '$rds1_Absoluta'";
}

if (!empty($img_dos_name)) {
    $sql .= ", img_dos = '$rds2_Absoluta'";
}

$sql .= ", codigo_estado = $codigo_estado, id_marca = $id_marca, id_categoria = $id_categoria, 
precio_oferta = " . ($precio_oferta !== null ? "'$precio_oferta'" : "NULL") . ", 
fecha_caducidad = " . ($fecha_caducidad !== null ? "'$fecha_caducidad'" : "NULL") . ",
id_talla = " . ($id_talla !== null ? "'$id_talla'" : "NULL") . ", 
id_color = " . ($id_color !== null ? "'$id_color'" : "NULL") . 
" WHERE id_producto = $id_producto";

$conn->query($sql);
header('location:Productos.php');
?>
