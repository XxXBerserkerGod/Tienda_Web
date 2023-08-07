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
                            <img src="img/banner/1.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="img/banner/2.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/banner/parallax.jpg" class="d-block w-100" alt="..." style="height: 350px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
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
                    <div class="one col-lg-4 col-md-12 col-12 p-0">
                        <img class="img-fluid" src="img/new/1.jpg" alt="">
                        <div class="details">
                            <h2>Extreme Rare Sneakers</h2>
                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                    <div class="one col-lg-4 col-md-12 col-12 p-0">
                        <img class="img-fluid" src="img/new/5.jpg" alt="">
                        <div class="details">
                            <h2>Awesome Blank Outfit</h2>
                            <button class="text-uppercase">Shop now</button>
                        </div>
                    </div>
                    <div class="one col-lg-4 col-md-12 col-12 p-0">
                        <img class="img-fluid" src="img/new/3.jpg" alt="">
                        <div class="details">
                            <h2>Sportwear Up To 50% Off</h2>
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
                    <h3>Comentarios</h3>
                    <hr class="mx-auto">
                    <div class="comments-list mt-5">

                        <div class="comment">
                            <div class="user-profile">
                                <img src="img/user1.jpg" alt="Usuario 1">
                                <div class="user-info">
                                    <h5>Juan Cardenas Alvares</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <p>¡Gran sitio web! Me encantan los productos. Siempre he sido un apasionado de la moda y este lugar tiene una increíble variedad de ropa y accesorios. ¡Definitivamente volveré a comprar aquí en el futuro!</p>
                        </div>

                        <div class="comment my-5">
                            <div class="user-profile">
                                <img src="img/user2.jpg" alt="Usuario 2">
                                <div class="user-info">
                                    <h5>Usuario 2</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>He estado buscando un lugar confiable para comprar ropa de calidad en línea y finalmente lo encontré. Los productos son increíbles y la atención al cliente es excelente. ¡Gracias por brindar una experiencia de compra tan satisfactoria!</p>
                        </div>

                        <div class="comment my-5">
                            <div class="user-profile">
                                <img src="img/user3.jpg" alt="Usuario 3">
                                <div class="user-info">
                                    <h5>Usuario 3</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Estoy impresionado con la calidad de los productos que ofrecen. Compré un par de zapatos y un vestido, y ambos superaron mis expectativas. Además, el proceso de compra fue muy fácil y la entrega fue puntual. ¡Seguro volveré a comprar aquí!</p>
                        </div>


                        <div class="comment my-5">
                            <div class="user-profile">
                                <img src="img/user4.jpg" alt="Usuario 4">
                                <div class="user-info">
                                    <h5>Usuario 4</h5>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <p>Desde que descubrí este sitio, se ha convertido en mi tienda en línea favorita. La variedad de productos es asombrosa y los precios son muy competitivos. La calidad de los productos es excelente y siempre encuentro lo que necesito. ¡Muy recomendado!</p>
                        </div>

                    </div>
                </section>
        </main>



        <?php
        include("Modelo/loginmodal.php");
        include("Modelo/registermodal.php");
        include("footer.php");
        ?>

</body>

</html>