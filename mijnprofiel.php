<?php
session_start();
require_once "database/conn.php";

if (!isset($_SESSION['user'])) {
    header("Location: inloggen.php");
    exit();
}

$email = $_SESSION['user'];
$sql = "SELECT voornaam, tussenvoegsel, achternaam, email, geboortedatum, telefoonnummer FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->bind_result($voornaam, $tussenvoegsel, $achternaam, $email, $geboortedatum, $telefoonnummer);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventu</title>
    <link rel="stylesheet" type="text/css" href="css/mijnprofiel.css">

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
        <h6>Mijn profiel</h6>
        <h1>Mijn profiel!<br>Jouw wereld</h1>
        <p>"Jouw profiel, jouw fantasie, jouw wereld!"</p>
    </div>
</section>

<!--- Profiel --->
<div class="profile-container">
    <h1>Mijn Profiel</h1>
    <form id="profileForm">
        <div class="form-row">
            <label for="voornaam">Voornaam:</label>
            <input type="text" id="voornaam" name="voornaam" value="<?php echo htmlspecialchars($voornaam); ?>" required>
        </div>
        <div class="form-row">
            <label for="tussenvoegsel">Tussenvoegsel:</label>
            <input type="text" id="tussenvoegsel" name="tussenvoegsel" value="<?php echo htmlspecialchars($tussenvoegsel); ?>">
        </div>
        <div class="form-row">
            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" value="<?php echo htmlspecialchars($achternaam); ?>" required>
        </div>
        <div class="form-row">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
        </div>
        <div class="form-row">
            <label for="geboortedatum">Geboortedatum:</label>
            <input type="date" id="geboortedatum" name="geboortedatum" value="<?php echo htmlspecialchars($geboortedatum); ?>" required>
        </div>
        <div class="form-row">
            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" value="<?php echo htmlspecialchars($telefoonnummer); ?>" required>
        </div>
        <button type="button" onclick="updateProfile()">Gegevens Bijwerken</button>
    </form>
    <div id="message"></div>
</div>

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


