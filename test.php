<?php
include_once('./Modelo/conexion.php');

$sql = "SELECT * FROM producto
inner join estaado1 asdasdasds WHERE id_producto = 5 ";

$resultado = $conn->query($sql); // Cambio de $listar a $resultado
$result = $resultado->fetch_assoc(); // Cambio de $listar a $resultado

echo $result['img_principal'];
