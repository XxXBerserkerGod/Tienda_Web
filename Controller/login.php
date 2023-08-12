<?php

include("../Modelo/conexion.php");

$user = $_POST["user"];
$pass = $_POST["password"];

$sql = "SELECT * FROM usuario
        WHERE user_usu = '$user'
        AND password = '$pass'";
$usuario = ($conn->query($sql))->fetch_assoc();

if ($usuario['user_usu'] == $user && $usuario['password'] == $pass) {
    session_start();
    $_SESSION['loged'] = 1;
    $_SESSION['usuario'] = $usuario['id_usu'];
    switch ($usuario['id_tipo_usuario']) {
        case 1:
            $_SESSION['tipo'] = 1;
            mysqli_close($conn);
            header('location:../index.php');
            break;
        case 2:
            $_SESSION['tipo'] = 2;
            mysqli_close($conn);
            header('location:../Vista/Administrador/Inicio.php');
            break;
    }
} else {
    header('location:../index.php');
}
