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
        include "menunav.php";
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
                            <td><img src="img/Productos/Maquillaje/base_1.webp" alt=""></td>
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
                            <td><img src="img/Productos/Maquillaje/base_2.webp" alt=""></td>
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
                            <td><img src="img/Productos/Cuidado Personal/crema_manos+uñas_3.webp" alt=""></td>
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

        <?php
        include "footer.php";
        ?>

    </div>


    <script src="JS/bootstrap.bundle.js"></script>
</body>

</html>