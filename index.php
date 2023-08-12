<?php

include('Modelo/conexion.php');
$sql = "SELECT * FROM producto
        WHERE codigo_estado = 1";
$ofertas = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>


<body>

    <div class="d-flex flex-column vh-100">

        <?php
        include "menunav.php";
        ?>

        <main class="d-flex flex-grow-1 flex-column justify-content-center" style="margin-top:92px; margin-bottom: -100px;">
            <div>
                <div id="carouselExampleDark" class="carousel carousel-dark slide ">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="img/sliders/slider1.webp" class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p> -->

                            </div>
                        </div>
                        <div class=" carousel-item" data-bs-interval="2000">
                            <img src="img/sliders/slider2.webp" class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/sliders/slider3.webp  " class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <!-- <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p> -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev" style="background-color: transparent;">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next" style="background-color: transparent;">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <section id="brand" class="container">
                <div class="row m-0 py-5">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/1.png" alt="">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/2.png" alt="">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/3.png" alt="">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/4.png" alt="">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/5.png" alt="">
                    <img class="img-fluid col-lg-2 col-md-4 col-6" src="img/brand/6.png" alt="">
                </div>
            </section>

            <!-- SECCION DE CATEGORIAS  -->
            <section id="new">
                <div class="row mx-auto container-fluid">
                    <div class="one text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid" src="img/Categorias/Categoria_maquillaje.webp" alt="">
                        <div class="details">
                            <button type="button" class="text-uppercase btn btn-light">Maquillaje</button>
                        </div>
                    </div>
                    <div class="one text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid" src="img/Categorias/CategoriacuidadoP.webp" alt="">
                        <div class="details">
                            <button type="button" class="text-uppercase btn btn-light">Cuidado Personal</button>
                        </div>
                    </div>
                    <div class="one text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid" src="img/Categorias/Categoriaperfumes.webp" alt="">
                        <div class="details">
                            <button type="button" class="text-uppercase btn btn-light">Perfumes</button>
                        </div>
                    </div>
                    <div class="one text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid" src="img/new/1.jpg" alt="">
                        <div class="details">
                            <button type="button" class="text-uppercase btn btn-light">Ropa</button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- PRODUCTOS MAS VENDIDOS -->
            <section id="featured" class="my-5 pb-5">
                <div class="container text-center mt-5 py-5">
                    <h3>Productos destacados</h3>
                    <hr class="mx-auto">
                    <p>Aquí puede ver nuestros nuevos productos a un precio justo en Bazar Perfumeria Janet</p>
                </div>
                <div class="row mx-auto container-fluid">
                    <?php
                    while ($oferta = $ofertas->fetch_assoc()) {
                    ?>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img onclick="window.location.href='sproduct.php?id=<?= $oferta['id_producto']; ?>';" class="product img-fluid mb-3" src="<?= $oferta['img_principal']; ?>" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name"><?= $oferta['nombre_producto']; ?></h5>
                            <h4 class="p-price text-danger text-decoration-line-through"><?= $oferta['precio_producto']; ?></h4>
                            <h4 class="p-price"><?= $oferta['precio_oferta']; ?></h4>
                            <button class="buy-btn">Comprar</button>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <!-- SECCION DE COMENTARIOS -->
                <section id="comments" class="container text-center mt-5">
                    <h3>Testimonios</h3>
                    <hr class="mx-auto">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="filter: invert(100%);"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="filter: invert(100%);"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="filter: invert(100%);"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active ">
                                <img src="img/sliders/fondoblanco.png" class="d-block w-100" alt="..." style="height: 350px;" style="color: black;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="container d-flex p-2 ">
                                        <div class="d-flex justify-content-center mx-3">
                                            <img src="img/users/user1.png" alt="" style="width:70px; height:70px;">
                                        </div>
                                        <div class="text-start me-5">
                                            <h5>Carlos Melgarejo Poma</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime assumenda id impedit recusandae quod quae nesciunt tempore eos molestiae modi sed iure, ullam soluta aut numquam quo tenetur a dolores.
                                            </p>
                                        </div>
                                        <div>
                                            <img src="img/testimonios/testimonio1.jpg" alt="" style="width: 180px;border-radius: 15px;">
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <img src="img/sliders/fondoblanco.png" class="d-block w-100" alt="..." style="height: 350px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="container d-flex p-2">
                                        <div class="d-flex justify-content-center mx-3">
                                            <img src="img/users/user2.png" alt="" style="width:70px; height:70px;">
                                        </div>
                                        <div class="text-start me-5">
                                            <h5>Marta Mesa Cardona</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime assumenda id impedit recusandae quod quae nesciunt tempore eos molestiae modi sed iure, ullam soluta aut numquam quo tenetur a dolores.
                                            </p>
                                        </div>
                                        <div>
                                            <img src="img/testimonios/testimonio2.jpg" alt="" style="width: 180px;border-radius: 15px;">
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/sliders/fondoblanco.png" class="d-block w-100" alt="..." style="height: 350px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="container d-flex p-2">
                                        <div class="d-flex justify-content-center mx-3">
                                            <img src="img/users/user3.png" alt="" style="width:70px; height:70px;">
                                        </div>
                                        <div class="text-start me-5">
                                            <h5>Pedro Alva Rp</h5>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <p class="text-dark">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime assumenda id impedit recusandae quod quae nesciunt tempore eos molestiae modi sed iure, ullam soluta aut numquam quo tenetur a dolores.
                                            </p>
                                        </div>
                                        <div>
                                            <img src="img/testimonios/testimonio3.jpg" alt="" style="width: 180px;border-radius: 15px;">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" style="filter: invert(100%) ;background-color: transparent; ">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" style="filter: invert(100%);background-color: transparent;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </section>
        </main>
        <?php
        include("footer.php");
        ?>
        <script src="JS/bootstrap.bundle.js"> </script>

</body>

</html>