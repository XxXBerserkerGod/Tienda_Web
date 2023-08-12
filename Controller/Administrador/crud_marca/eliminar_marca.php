<?php
include("../../../Modelo/conexion.php");
$idm= $_POST["idmarca"];
$sql = "UPDATE marca SET estado_marca=0
        WHERE id_marca = $idm";
$conn->query($sql);
header('location:../../../Vista/Administrador/crud_marca/Marca.php');
