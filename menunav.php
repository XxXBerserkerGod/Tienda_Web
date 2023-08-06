<?php
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
        <img src="img/logo1.png" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><i id="bar" class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="shop.php">Productos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categorias
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Categoria 1</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Marcas
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">Marca 1</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <i onclick="window.location.href='cart.php';" class="fa-solid fa-bag-shopping"></i>
                </li>

                <?php
                session_start();
                if (isset($_SESSION['loged']) && $_SESSION['loged'] == '1') {
                ?>
                    <li class=" ms-4">
                        <a href="./Controller/logout.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                        </a>
                    </li>
                <?php
                } else {
                ?>
                    <li class=" ms-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#login_Modal">
                            <i class="fa-solid fa-circle-user useric"></i>
                        </a>
                    </li>
                <?php
                }
                ?>
        </div>
    </nav>
    <?php
    include("Modelo/loginmodal.php");
    ?>
    <script src="/JS/bootstrap.bundle.js"></script>
</body>

</html>