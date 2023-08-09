<?php 

include('Modelo/conexion.php');

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
                                <div class="d-flex justify-content-end w-100">
                                    <button class="btn btn-light w-50">Compra aquí</button>
                                </div>
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



            <!-- SECCION DE MARCAS  -->
            <section id="new" class="w-100">
                <div class="row p-0 m-0">
                    <div class="one col-lg-3 col-md-12 col-12 p-0 m-2">
                        <img class="img-fluid" src="img/new/1.jpg" alt="">
                        <div class="details">
                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                    <div class="one col-lg-3 col-md-12 col-12 p-0 m-2">
                        <img class="img-fluid" src="img/new/5.jpg" alt="">
                        <div class="details">
                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                    <div class="one col-lg-3 col-md-12 col-12 p-0 m-2">
                        <img class="img-fluid" src="img/new/3.jpg" alt="">
                        <div class="details">
                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                    <div class="one col-lg-3 col-md-12 col-12 p-0 m-2">
                        <img class="img-fluid" src="img/new/1.jpg" alt="">
                        <div class="details">

                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                </div>
            </section>


            <!-- PRODUCTOS MAS VENDIDOS -->

            <section id="featured" class="my-5 pb-5">
                <div class="container text-center mt-5 py-5">
                    <h3>Our Featured</h3>
                    <hr class="mx-auto">
                    <p>Here you can check out our new products with fair price on rymo.</p>
                </div>
                <div class="row mx-auto container-fluid">
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid mb-3" src="img/featured/1.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sport Boots</h5>
                        <h4 class="p-price">$92.00</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid mb-3" src="img/featured/2.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sport Boots</h5>
                        <h4 class="p-price">$92.00</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid mb-3" src="img/featured/3.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sport Boots</h5>
                        <h4 class="p-price">$92.00</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                    <div class="product text-center col-lg-3 col-md-4 col-12">
                        <img class="img-fluid mb-3" src="img/featured/4.jpg" alt="">
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h5 class="p-name">Sport Boots</h5>
                        <h4 class="p-price">$92.00</h4>
                        <button class="buy-btn">Buy Now</button>
                    </div>
                </div>


                <!-- APARTADO DE PRODUCTOS -->

                <section id="clothes" class="my-5">
                    <div class="container text-center mt-5 py-5">
                        <h3>Dresses & Jumpsuits</h3>
                        <hr class="mx-auto">
                        <p>Here you can check out our new products with fair price on rymo.</p>
                    </div>
                    <div class="row mx-auto container-fluid">
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/clothes/1.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/clothes/2.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/clothes/3.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/clothes/1.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>
                </section>

                <section id="watches" class="my-5">
                    <div class="container text-center mt-5 py-5">
                        <h3>Best Watches</h3>
                        <hr class="mx-auto">
                        <p>Here you can check out our new products with fair price on rymo.</p>
                    </div>
                    <div class="row mx-auto container-fluid">
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/watches/1.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/watches/2.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/watches/3.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/watches/1.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>
                </section>

                <section id="shoes" class="mt-5 mb-3 pb-5">
                    <div class="container text-center mt-5 py-5">
                        <h3>Running Shoes</h3>
                        <hr class="mx-auto">
                        <p>Here you can check out our new products with fair price on rymo.</p>
                    </div>
                    <div class="row mx-auto container-fluid">
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/shoes/8.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/shoes/7.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/shoes/6.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                        <div class="product text-center col-lg-3 col-md-4 col-12">
                            <img class="img-fluid mb-3" src="img/shoes/5.jpg" alt="">
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <h5 class="p-name">Sport Boots</h5>
                            <h4 class="p-price">$92.00</h4>
                            <button class="buy-btn">Buy Now</button>
                        </div>
                    </div>
                </section>

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
                                            <img src="img/testimonios/testimonio1.jpg" alt="" style="width: 180px;">
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
                                            <img src="img/testimonios/testimonio2.jpg" alt="" style="width: 180px;">
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
                                            <img src="img/testimonios/testimonio3.jpg" alt="" style="width: 180px;">
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