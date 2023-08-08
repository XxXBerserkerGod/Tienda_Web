<?php
include('Modelo/conexion.php');
$id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="JS/bootstrap.bundle.js">
    <link rel="stylesheet" href="CSS/style.css">

    <style>
        .small-img-group {
            display: flex;
            justify-content: space-between;
        }

        .small-img-col {
            flex-basis: 24%;
            cursor: pointer;
        }

        .sproduct select {
            display: block;
            padding: 5px 10px;
        }

        .sproduct input {
            width: 50px;
            height: 40px;
            padding-left: 10px;
            font-size: 16px;
            margin-right: 10px;
        }

        .sproduct input:focus {
            outline: none;
        }

        .buy-btn {
            background: #fb774b;
            opacity: 1;
            transition: 0.3s all;
        }
    </style>

</head>

<body>

    <!-- NAVIGATION -->
    <div class="d-flex flex-column vh-100">

        <?php
        include('menunav.php');
        $sql = "SELECT *
                FROM producto AS prod INNER JOIN categoria AS cat
                    ON prod.id_categoria = cat.id_categoria
                WHERE id_producto = '$id'";
        $listar = $conn->query($sql);
        $row = $listar->fetch_assoc();
        ?>

        <section class="container sproduct my-5 pt-5">
            <div class="row mt-5">
                <div class="col-lg-5 col-md-12 col-12">

                    <img class="img-fluid w-100 pb-1" src="<?=$row['img_principal'];?>" id="MainImg" alt="">

                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="<?=$row['img_principal']; ?>" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="<?=$row['img_uno']; ?>" width="100%" class="small-img" alt="">
                        </div>
                        <div class="small-img-col">
                            <img src="<?=$row['img_dos']; ?>" width="100%" class="small-img" alt="">
                        </div>

                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <h6> <a href="shop.php" class="text-decoration-none text-black">Productos</a> / <?=$row['nombre_categoria']?></h6>
                    <h3 class="py-4"><?= $row['nombre_producto'] ?></h3>
                    <h2>S/. <?= $row['precio_producto'] ?></h2>
                    <?php 
                        if ($row['id_categoria'] == 4) {
                    ?>
                        <select class="my-3">
                            <option>Selecciona Talla</option>
                            <option>S</option>
                            <option>M</option>
                            <option>L</option>
                            <option>XL</option>
                            <option>XXL</option>
                        </select>
                    <?php 
                        }
                    ?>
                    <input type="number" value="1">
                    <button class="buy-btn">Agregar al Carrito</button>
                    <h4 class="mt-5 mb-4">Detalles del Producto</h4>
                    <span><?= $row['descripcion'] ?></span>

                </div>
            </div>
        </section>

        <section id="featured" class="my-1 pb-5">
            <div class="container text-center mt-5 py-5">
                <h3>Productos Relacionados</h3>
                <hr class="mx-auto">
            </div>
            <div class="row mx-auto container-fluid">
            <?php
                $idcat = $row['id_categoria'];
                $sqlrelacionados = "SELECT * FROM producto
                                    WHERE id_categoria = '$idcat'";
                $relacionados = $conn->query($sqlrelacionados);
                while ($relacionado = $relacionados->fetch_assoc()) {
            ?>
                <div onclick="window.location.href='sproduct.php?id=<?= $relacionado['id_producto']; ?>';" class="product col-lg-3 col-md-4 col-12 text-center">
                    <img class="mb-3 img-fluid pimg" src="<?= $relacionado['img_principal']; ?>" style="height: 286.88px;">
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5 class="p-name"><?= $relacionado['nombre_producto']; ?></h5>
                    <h4 class="p-price">S/. <?= $relacionado['precio_producto']; ?></h4>
                    <button class="buy-btn">Comprar</button>
                </div>
            <?php
            }
            ?>
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

    <script src="JS/bootstrap.bundle.js"></script>

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallimg = document.getElementsByClassName('small-img');

        smallimg[0].onclick = function() {
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function() {
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function() {
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function() {
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>

</html>