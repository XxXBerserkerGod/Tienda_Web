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
            <div class="container mt-5 py-5">
                <h2 class="font-weight-bold">Our Featured</h2>
                <hr>
                <p>Here you can check out our new products with fair price on rymo.</p>
            </div>


            <div class="row mx-auto container">

                <?php
                while ($row = $listar->fetch_assoc()) {

                ?>
                    <div onclick="window.location.href='sproduct.php?id=<?= $row['id_producto']; ?>';" class="product col-lg-3 col-md-4 col-12 text-center">
                        <img class="mb-3 img-fluid pimg" src="<?= $row['img_principal']; ?>" style="height: 286.88px;">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name"><?= $row['nombre_producto']; ?></h5>
                        <h4 class="p-price">S/. <?= $row['precio_producto']; ?></h4>
                        <button class="buy-btn">Comprar</button>
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

        <footer class="mt-5 py-5">
            <div class="row container mx-auto pt-5">
                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <img src="img/logo2.png" alt="">
                    <p class="pt-3">Fringilla urna porttitor rhoncus dolor purus luctus venenatis lectus magna fringilla
                        diam maecenas ultricies mi eget mauris.</p>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                    <h5 class="pb-2">Featured</h5>
                    <ul class="text-uppercase list-unstyled">
                        <li><a href="#">men</a></li>
                        <li><a href="#">women</a></li>
                        <li><a href="#">boys</a></li>
                        <li><a href="#">girls</a></li>
                        <li><a href="#">new arrivals</a></li>
                        <li><a href="#">shoes</a></li>
                        <li><a href="#">cloths</a></li>

                    </ul>
                </div>
                <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">
                    <h5 class="pb-2">Contact Us</h5>
                    <div>
                        <h6 class="text-uppercase">Address</h6>
                        <p>123 STREET NAME, CITY, US</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Phone</h6>
                        <p>(123) 456-7890</p>
                    </div>
                    <div>
                        <h6 class="text-uppercase">Email</h6>
                        <p>MAIL@EXAMPLE.COM</p>
                    </div>
                </div>

                <div class="footer-one col-lg-3 col-md-6 col-12">
                    <h5 class="pb-2">Instagram</h5>
                    <div class="row">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/1.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/2.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/3.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/4.jpg" alt="">
                        <img class="img-fluid w-25 h-100 m-2" src="img/insta/5.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="copyright mt-5">
                <div class="row container mx-auto">

                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="img/payment.png" alt="">
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                        <p>rymo eCommerce © 2021. All Rights Reserved</p>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="JS/bootstrap.bundle.js"> </script>
</body>

</html>