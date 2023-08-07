<?php 

include('../../Modelo/conexion.php');

$user = $_POST['user'];
$pass = $_POST['password'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$ubigeo = $_POST['ubigeo'];
$tipo = 1;
if (isset($_POST['ruc'])) {
    $ruc = $_POST['ruc'];
    $sql = "INSERT INTO usuario
        (user_usu, password, nombres_usu, apellidos_usu, dni_usu, telefono_usu, correo_usu, direccion, id_ubigeo, id_tipo_usuario, ruc)
        VALUES('$user', '$pass', '$nombre', '$apellido', '$dni', '$telefono', '$email', '$direccion', '$ubigeo', '$tipo', '$ruc')";
    $conn->query($sql);
    header('location:../../index.php');
} else {
    $sql = "INSERT INTO usuario
        (user_usu, password, nombres_usu, apellidos_usu, dni_usu, telefono_usu, correo_usu, direccion, id_ubigeo, id_tipo_usuario)
        VALUES('$user', '$pass', '$nombre', '$apellido', '$dni', '$telefono', '$email', '$direccion', '$ubigeo', '$tipo')";
    $conn->query($sql);
    header('location:../../index.php');
}



?>