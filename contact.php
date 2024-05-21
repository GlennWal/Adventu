<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css">

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
        <h6>Beschikbaar van 8:00 t/m 17:00</h6>
        <h1>Contacteer ons! <br> ready to talk!</h1>
        <p>"Klaar om jouw vragen te beantwoorden! Neem contact op en ervaar onze toegewijde klantenservice."</p>
        <div>
            <a href="mailto:glennmah@live.nl" class="btn">Email ons!  <i class="ri-arrow-right-line"></i></a>
            <a href="javascript:void(0)" class="btn" onclick="openPopup()">Bel ons! <i class="ri-arrow-right-line"></i> </a>
        </div>
    </div>
</section>


<!--- footer --->
<section class="footer" data-aos="fade-down">
    <div class="footer-box">
        <h3>Company</h3>
        <a href="#">About</a>
        <a href="#">Features</a>
        <a href="#">Works</a>
        <a href="#">Career</a>
    </div>

    <div class="footer-box">
        <h3>FAQ</h3>
        <a href="#">Account</a>
        <a href="#">Features</a>
        <a href="#">Works</a>
        <a href="#">Career</a>
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

    function openPopup() {
        var phoneNumber = "012-3456789"; // Vervang dit met het gewenste telefoonnummer
        var popupContent = "Bel ons op: " + phoneNumber;
        alert(popupContent);
    }
</script>