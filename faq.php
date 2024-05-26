<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/faq.css">

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
        <h6>Veelgestelde vragen</h6>
        <h1>FAQ!<br>Veelgestelde vragen</h1>
        <p>"Vind snel en eenvoudig de antwoorden die u zoekt - Uw Vragen, Onze Antwoorden bij FAQ!"</p>

    </div>
</section>

<!--- FAQ Section --->
<section class="faq" data-aos="fade-up">
    <div class="container">
        <h2>Veelgestelde Vragen</h2>
        <div class="faq-item">
            <input type="checkbox" id="faq1">
            <label for="faq1">Hoe lang duurt de levertijd?</label>
            <div class="faq-content">
                <p>Onze levertijd bedraagt doorgaans 3-5 werkdagen. Tijdens drukke periodes kan dit iets langer zijn.</p>
            </div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq2">
            <label for="faq2">Wat is jullie retourbeleid?</label>
            <div class="faq-content">
                <p>Je kunt je bestelling binnen 30 dagen na ontvangst retourneren, mits het product onbeschadigd en in de originele verpakking zit.</p>
            </div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq3">
            <label for="faq3">Hoe kan ik mijn bestelling volgen?</label>
            <div class="faq-content">
                <p>Na het plaatsen van je bestelling ontvang je een trackingnummer waarmee je je pakket online kunt volgen.</p>
            </div>
        </div>
        <div class="faq-item">
            <input type="checkbox" id="faq4">
            <label for="faq4">Wat moet ik doen als een product uitverkocht is?</label>
            <div class="faq-content">
                <p>Als een product uitverkocht is, kun je je inschrijven voor een melding zodra het weer op voorraad is.</p>
            </div>
        </div>
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

    document.addEventListener('DOMContentLoaded', function() {
        const faqItems = document.querySelectorAll('.faq-item h3');

        faqItems.forEach(item => {
            item.addEventListener('click', () => {
                const parent = item.parentElement;
                parent.classList.toggle('active');
            });
        });
    });


</script>

