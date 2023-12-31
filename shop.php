<?php
include('./Modelo/conexion.php');

if (isset($_GET['categoria']) || isset($_GET['marca'])) {
    if (isset($_GET['categoria'])) {
        $categoria = $_GET['categoria'];
        $sql = "SELECT * FROM producto
                WHERE id_categoria = '$categoria'";
        $listar = $conn->query($sql);
    }
    if (isset($_GET['marca'])) {
        $marca = $_GET['marca'];
        $sql = "SELECT * FROM producto
                WHERE id_marca = '$marca'";
        $listar = $conn->query($sql);
    }
} else {
    $sql = "SELECT * FROM producto";
    $listar = $conn->query($sql);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>

    <style>
        .product img {
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }

        #featured>div.row.mx-auto.container>nav>ul>li.page-item.active>a {
            background-color: black;
        }

        #featured>div.row.mx-auto.container>nav>ul>li:nth-child(n):hover>a {
            background-color: coral;
            color: #fff;
        }

        .pagination a {
            color: #000;
        }
    </style>

</head>

<body>

    <!-- NAVIGATION -->
    <div class="d-flex flex-column vh-100">

        <?php
        include "menunav.php";
        ?>

        <section id="featured" class="my-5 py-5">
            <div class="container mt-3 py-5">
                <?php


                if (isset($_GET['categoria'])) {
                    $categoria = $_GET['categoria'];
                    $sqlcategoria = "SELECT * FROM categoria
                                    WHERE id_categoria = '$categoria'";
                    $categorias = ($conn->query($sqlcategoria))->fetch_assoc();
                ?>
                    <h2 class="font-weight-bold"><?= $categorias['nombre_categoria']; ?></h2>
                <?php
                } else if (isset($_GET['marca'])) {
                    $marca = $_GET['marca'];
                    $sqlmarca = "SELECT * FROM marca
                    WHERE id_marca = '$marca'";
                    $marcas = ($conn->query($sqlmarca))->fetch_assoc();
                ?>
                    <h2 class="font-weight-bold"><?= $marcas['nombre_marca']; ?></h2>
                <?php
                } else {
                ?>
                    <h2 class="font-weight-bold">Productos</h2>
                <?php
                }
                ?>
                <hr>
            </div>


            <div id="lista-productos" class="row mx-auto container">

                <?php
                while ($row = $listar->fetch_assoc()) {
                ?>
                    <div class="product col-lg-3 col-md-4 col-12 text-center">
                        <img onclick="window.location.href='sproduct.php?id=<?= $row['id_producto']; ?>';" class="product mb-3 img-fluid pimg" src="<?= $row['img_principal']; ?>" style="height: 286.88px;">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name"><?= $row['nombre_producto']; ?></h5>
                        <?php
                        if ($row['codigo_estado'] == 1) {
                        ?>
                            <h4 class="p-price text-danger text-decoration-line-through"><?= $row['precio_producto']; ?></h4>
                            <h4 class="p-price"><?= $row['precio_oferta']; ?></h4>
                        <?php
                        } else {
                        ?>
                            <h4 class="p-price">S/. <?= $row['precio_producto']; ?></h4>
                        <?php
                        }
                        ?>
                        <button class="buy-btn" data-id="<?= $row['id_producto']; ?>">Comprar</button>
                    </div>

                <?php
                }
                ?>
                <nav aria-label="...">
                    <ul class="pagination mt-5">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>
        <?php
        include("footer.php");
        ?>
    </div>

    <script src="JS/bootstrap.bundle.js"> </script>
    <script src="JS/Carrito.js"></script>
    <script src="JS/Pedidos.js"></script>
</body>

</html>