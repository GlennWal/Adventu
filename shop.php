<?php
require_once "database/conn.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/shop.css">

    <!-- box-icons link -->
    <link rel="stylesheet"
          href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- remix-icons link -->
    <link
            href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css"
            rel="stylesheet"/>

    <!-- google fonts link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>
<body>

<!--- header --->
<header>

    <?php include_once "./includes/header.php"; ?>


</header>

<!--- home --->
<section class="home">
    <div class="home-text" data-aos="fade-up">
        <h6>New Arrivals</h6>
        <h1>Nu gearriveerd! <br> ready to rock</h1>
        <p>"Ontdek onze nieuwste aanwinst: nu gearriveerd en klaar om jou te laten schitteren!"</p>
        <a href="#" class="btn">
            Shop now
            <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</section>

<section class="selling">
    <div class="center-text" data-aos="fade-up">
        <h2>Populair</h2>
    </div>

    <div class="selling-content" data-aos="zoom-in-up">
        <div class="col">
            <div class="col-img">
                <img src="img/n1.png">
            </div>

            <div class="col-icon">
            </div>
        </div>

        <div class="col">
            <div class="col-img">
                <img src="img/n4.png">
            </div>

            <div class="col-icon">

            </div>
        </div>

        <div class="col">
            <div class="col-img">
                <img src="img/n7.png">
            </div>

            <div class="col-icon">

            </div>
        </div>

    </div>
</section>


<!--- all products --->
<section class="n-product">
    <div class="center-text" data-aos="fade-down">
        <h2>Alle Producten</h2>
    </div>

    <div class="n-content" data-aos="zoom-in">
        <div class="row" >
            <div class="row-img">
                <img src="img/n1.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n2.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n3.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n4.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n5.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n6.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n7.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-img">
                <img src="img/n8.png">
            </div>
            <h3>T-shirt with tape details</h3>

            <div class="row-in">
                <div class="row-left">
                    <a href="#">
                        Add to cart
                        <i class="ri-shopping-cart-fill"></i>
                    </a>
                </div>

                <div class="row-right">
                    <h6>$150.00</h6>
                </div>
            </div>
        </div>

    </div>

    <div class="n-btn" data-aos="zoom-in">
        <a href="#" class="btn2">View all</a>
    </div>
</section>

<!--- footer --->
<section class="footer" data-aos="fade-down">
    <div class="footer-box">
        <h3>Het bedrijf</h3>
        <a href="overons.php">Over ons</a>
        <a href="#">Winkel</a>
        <a href="contact.php">Contact</a>
        <a href="privacyverklaring.php">privacy verklaring</a>
    </div>


    <div class="footer-box">
        <h3>FAQ</h3>
        <a href="#">Levertijd</a>
        <a href="#">Retourbeleid</a>
        <a href="#">Je bestelling</a>
        <a href="#">Uitverkocht</a>
    </div>

    <div class="footer-box">
        <h3>Social</h3>
        <div class="social">
            <a href="#"><i class="ri-facebook-fill"></i></a>
            <a href="#"><i class="ri-instagram-fill"></i></a>
            <a href="#"><i class="ri-twitter-fill"></i></a>
        </div>
    </div>

</section>


<!--- custom js link --->
<script src="js/script.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 300,
        duration: 1450,
    });
</script>