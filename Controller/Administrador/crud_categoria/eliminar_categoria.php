<?php
include("../../../Modelo/conexion.php");
$idcat = $_POST["idcat"];
$sql = "UPDATE categoria SET estado_categoria=0
        WHERE id_categoria  = $idcat";
$conn->query($sql);
header('location:../../../Vista/Administrador/crud_categoria/Categoria.php');
