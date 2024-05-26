<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/winkelwagen.css">

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

<!--- Homepagina --->
<section class="home">
    <div class="home-text" data-aos="fade-up">
        <h6>Winkelwagen</h6>
        <h1>Jouw Winkelwagen <br> ready to shop</h1>
        <p>"De winkelwagen: jouw betrouwbare partner voor moeiteloos winkelen!"</p>
        <a href="#" class="btn">
            Shop now
            <i class="ri-arrow-right-line"></i>
        </a>
    </div>
</section>

<!--- Winkelwagen leeg --->
<section class="empty-cart">
    <div class="empty-cart-text" data-aos="fade-up">
        <h1>Uw winkelwagen is leeg</h1>
        <p>Het lijkt erop dat je nog niets hebt toegevoegd aan je winkelwagen. Begin met winkelen en vul je winkelwagen met geweldige producten!</p>
        <a href="shop.php" class="btn">Begin met winkelen <i class="ri-arrow-right-line"></i></a>
    </div>
</section>

<!--- footer --->
<section class="footer" data-aos="fade-down">
    <div class="footer-box">
        <h3>Het bedrijf</h3>
        <a href="overons.php">Over ons</a>
        <a href="shop.php">Winkel</a>
        <a href="contact.php">Contact</a>
        <a href="privacyverklaring.php">privacy verklaring</a>
    </div>


    <div class="footer-box">
        <h3>FAQ</h3>
        <a href="faq.php">Levertijd</a>
        <a href="faq.php">Retourbeleid</a>
        <a href="faq.php">Je bestelling</a>
        <a href="faq.php">Product</a>
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
</body>
</html>
