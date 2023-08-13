<?php
include('Modelo/conexion.php');
session_start();

$sqlcategoria = "SELECT * FROM categoria";
$categorias = $conn->query($sqlcategoria);

$sqlmarca = "SELECT * FROM marca";
$marcas = $conn->query($sqlmarca);

// Obtén el nombre de la página actual a partir de la URL
$urlpag = $_SERVER['REQUEST_URI'];
$nombrepag = basename($urlpag);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top container-fluid px-5">
        <div onclick="window.location.href='index.php';" class="d-flex justify-content-center align-items-center">
            <img src="img/logo1.webp" alt="" style="width: 70px;">
            <p class="m-0 ms-1 fw-bold">
                Bazar Perfumeria Janet
            </p>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <?php
                if (isset($_SESSION['loged']) && $_SESSION['loged'] == '1' && $_SESSION['tipo'] == 2) {
                ?>

                    <li class="nav-item">
                        <a class="nav-link" href="Vista/Administrador/Inicio.php">Admin</a>
                    </li>

                <?php
                }
                ?>
                <li class="nav-item">
                    <a class="nav-link <?php if ($nombrepag === 'index.php' || $nombrepag === 'Tienda_Web') echo 'active'; ?>" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link <?php if ($nombrepag === 'shop.php') echo 'active'; ?>" href="shop.php">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        while ($categoria = $categorias->fetch_assoc()) {
                        ?>

                            <li>
                                <a class="dropdown-item <?php if ($nombrepag === 'shop.php?categoria=' . $categoria['id_categoria']) echo 'active'; ?>" href="/Tienda_Web/shop.php?categoria=<?= $categoria['id_categoria']; ?>"><?= $categoria['nombre_categoria']; ?></a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Marcas
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        while ($marca = $marcas->fetch_assoc()) {
                        ?>

                            <li>
                                <a class="dropdown-item <?php if ($nombrepag === 'shop.php?marca=' . $marca['id_marca']) echo 'active'; ?>" href="/Tienda_Web/shop.php?marca=<?= $marca['id_marca']; ?>"><?= $marca['nombre_marca']; ?></a>
                            </li>

                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item dropdown">
                    <i class="fa-solid fa-magnifying-glass dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false"></i>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item d-flex justify-content-starts align-content-center">
                            <input type="text" id="search" name="busqueda" placeholder="Buscar productos...">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </li>
                        <li class="dropdown-divider"></li>
                        <ul id="resultados">
                        </ul>
                    </ul>

                </li>
                <li class="nav-item">
<<<<<<< HEAD
                    <i class="fa-solid fa-magnifying-glass"></i>
                </li>

                <li class="nav-item dropdown-menu-end">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <table id="lista-carrito" class="table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        <div class="d-flex flex-column p-2">

                            <a href="#" id="vaciar-carrito" class="btn btn-primary btn-block mb-2">Vaciar Carrito</a>
                            <a href="#" id="procesar-pedido" class="btn btn-danger btn-block">Procesar
                                Compra</a>
                        </div>
                    </ul>
=======
                    <i onclick="window.location.href='cart.php';" class="fa-solid fa-bag-shopping"></i>
>>>>>>> d0be8d2396bdf6b7f4554535bb1e40d47e21baf4
                </li>
                <?php

                if (isset($_SESSION['loged']) && $_SESSION['loged'] == '1') {
                    $idusuario = $_SESSION['usuario'];
                    $sqlusuario = "SELECT * FROM usuario
                                    WHERE id_usu = '$idusuario'";
                    $usuario = ($conn->query($sqlusuario))->fetch_assoc();
                    $nombres = $usuario['apellidos_usu'] . ", " . $usuario['nombres_usu'];
                ?>
                    <li class="nav-item ms-4">
                        Bienvenido <?= $nombres; ?>
                    </li>
                    <li class="nav-item ms-4">
                        <a class="nav-link" href="./Controller/logout.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </li>

                <?php
                } else {
                ?>

                    <li class="nav-item dropdown ms-4">
                        <i class="fa-solid fa-circle-user useric nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#login_Modal">Iniciar Sesión</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#register_Modal">Registrarse</a>
                            </li>
                        </ul>
                    </li>

                <?php
                }
                ?>
            </ul>
        </div>

    </nav>

    <?php
    include("Modelo/loginmodal.php");
    include('Modelo/registermodal.php');
    ?>
<<<<<<< HEAD


=======
    <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#search').keyup(function() {
                var busqueda = $(this).val();
                $.ajax({
                    url: "Controller/Cliente/buscar.php",
                    method: "POST",
                    data: {
                        busqueda: busqueda
                    },
                    dataType: "json",
                    success: function(response) {
                        var resultadosDiv = $('#resultados');
                        resultadosDiv.empty();

                        if (response && response.length > 0) {
                            for (var i = 0; i < response.length; i++) {
                                var producto = response[i];
                                var resultado = $('<li class="dropdown-item">' +
                                    '<a class="d-flex justify-content-start align-items-center form-text" href="/Tienda_Web/sproduct.php?id=' +
                                    producto.id_producto + '">' +
                                    '<img class="me-3" width="75px" src="' + producto.img_principal + '">' +
                                    '<p class="m-0">' + producto.nombre_producto + '</p>' +
                                    '</a></li>');
                                resultadosDiv.append(resultado);
                            }
                        } else {
                            resultadosDiv.html('<p>No se encontraron resultados.</p>');
                        }
                    },
                    error: function() {
                        alert("Error al obtener datos de la bd")
                    }
                })
            });
        });
    </script>
>>>>>>> d0be8d2396bdf6b7f4554535bb1e40d47e21baf4
</body>

</html>