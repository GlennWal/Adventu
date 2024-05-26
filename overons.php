<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/overons.css">

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
        <h6>Over ons</h6>
        <h1>Wie zijn wij?<br>Het team</h1>
        <p>"Samen Sterker, Samen Succesvoller"</p>

    </div>
</section>

<!--- over ons --->
<section class="overons" data-aos="fade-up">
    <div class="container">
        <h2>Over ons</h2>
        <p>Welkom bij Adventu! Wij zijn een gepassioneerd team dat zich inzet om jou de beste producten en diensten te bieden. Ons doel is om jou te inspireren en te ondersteunen in jouw avonturen. Met een focus op kwaliteit en klanttevredenheid, streven we ernaar om een onvergetelijke winkelervaring te creëren.</p>

        <h3>Onze Missie</h3>
        <p>Bij Adventu streven we ernaar om de avontuurlijke geest in iedereen te ontketenen. Of je nu een doorgewinterde reiziger bent of net begint aan je eerste avontuur, wij zijn hier om je te voorzien van de beste uitrusting en ondersteuning die je nodig hebt om je doelen te bereiken.</p>

        <h3>Onze Waarden</h3>
        <ul>
            <li><strong>Kwaliteit:</strong> Wij bieden alleen producten van de hoogste kwaliteit, die zorgvuldig zijn geselecteerd en getest.</li>
            <li><strong>Klanttevredenheid:</strong> Jouw tevredenheid is onze hoogste prioriteit. We streven ernaar om elke klant tevreden te stellen met uitstekende service.</li>
            <li><strong>Duurzaamheid:</strong> We zetten ons in voor milieuvriendelijke praktijken en duurzame producten om de planeet te beschermen.</li>
        </ul>

        <h3>Ons Team</h3>
        <p>Ons team bestaat uit ervaren professionals die gepassioneerd zijn over wat ze doen. We werken hard om ervoor te zorgen dat onze klanten tevreden zijn met elke aankoop. Hier zijn enkele van onze teamleden:</p>

        <div class="team">
            <div class="team-member" data-aos="fade-right">
                <img src="img/pf.png" alt="Team Member 1">
                <h4>Glenn Wal</h4>
                <p>CEO & Founder</p>
                <button onclick="showInfo(this)">Meer informatie</button>
                <div class="team-info" style="display: none;">
                    <p>John heeft meer dan 20 jaar ervaring in de outdoor-industrie en is de drijvende kracht achter Adventu. Zijn passie voor avontuur en duurzaamheid inspireert het hele team.</p>
                </div>
            </div>
            <div class="team-member" data-aos="fade-left">
                <img src="img/pf.png" alt="Team Member 2">
                <h4>Glenn Wal</h4>
                <p>Marketing Director</p>
                <button onclick="showInfo(this)">Meer informatie</button>
                <div class="team-info" style="display: none;">
                    <p>Jane brengt een schat aan ervaring in marketing en communicatie. Ze zorgt ervoor dat onze boodschap en producten de juiste mensen bereiken.</p>
                </div>
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

</script>

