<?php
include_once('./Modelo/conexion.php');

$sql = "SELECT * FROM producto
inner join estaado1 asdasdasds WHERE id_producto = 5 ";

$listar = $conn->query($sql);
$result = $listar->fetch_assoc();


echo $result['img_principal'];
