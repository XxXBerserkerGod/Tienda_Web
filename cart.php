<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial</title>

    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVIGATION -->
    <div class="d-flex flex-column vh-100">

        <?php
        include "menunav.html";
        ?>


        <main class="d-flex flex-grow-1 flex-column">
            <section id="cart" class="container pt-5">
                <h2 class="font-weight-bold pt-5 mt-5">Shopping Cart</h2>
                <hr>
            </section>

            <section id="cart-container" class="container my-5">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Remove</td>
                            <td>Image</td>
                            <td>Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                            <td><img src="img/shoes/1.jpg" alt=""></td>
                            <td>
                                <h5>Handbag Fringilla</h5>
                            </td>
                            <td>
                                <h5>$65</h5>
                            </td>
                            <td><input class="w-25 pl-1" type="number" value="1"></td>
                            <td>
                                <h5>$130.00 </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                            <td><img src="img/shoes/2.jpg" alt=""></td>
                            <td>
                                <h5>Handbag Fringilla</h5>
                            </td>
                            <td>
                                <h5>$65</h5>
                            </td>
                            <td><input class="w-25 pl-1" type="number" value="1"></td>
                            <td>
                                <h5>$130.00 </h5>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#0"><i class="fas fa-trash-alt"></i></a></td>
                            <td><img src="img/shoes/3.jpg" alt=""></td>
                            <td>
                                <h5>Handbag Fringilla</h5>
                            </td>
                            <td>
                                <h5>$65</h5>
                            </td>
                            <td><input class="w-25 pl-1" type="number" value="1"></td>
                            <td>
                                <h5>$130.00 </h5>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section id="cart-bottom" class="container">
                <div class="row">
                    <div class="coupon col-lg-6 col-md-6 col-12 mb-4">
                        <div>
                            <h5>COUPON</h5>
                            <p>Enter your coupon code if you have one. </p>
                            <input type="text" placeholder="Coupon Code">
                            <button>APPLY COUPON</button>
                        </div>
                    </div>
                    <div class="total col-lg-6 col-md-6 col-12">
                        <div>
                            <h5>CART TOTAL</h5>
                            <div class="d-flex justify-content-between">
                                <h6>Subtotal</h6>
                                <p>$215.00 </p>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Shipping</h6>
                                <p>$255.00</p>
                            </div>
                            <hr class="second-hr">
                            <div class="d-flex justify-content-between">
                                <h6>Total</h6>
                                <p>$215.00 </p>
                            </div>
                            <div class="d-flex justify-content-end p-0">
                                <button class="ml-auto">PROCEED TO CHECKOUT</button>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </main>
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
</body>

</html>