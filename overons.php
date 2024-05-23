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
        <h6>New Arrivals</h6>
        <h1>Nu gearriveerd!<br>ready to rock</h1>
        <p>"Ontdek onze nieuwste aanwinst: nu gearriveerd en klaar om jou te laten schitteren!"</p>

    </div>
</section>

<?php
require_once "database/conn.php";

$sql = "SELECT * FROM leden";
?>

<div class="team-member">
    <!--        </div>-->
    <?php
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_row()) {
            $voornaam = $row[1];
            $tussenvoegsel = $row[2];
            $achternaam = $row[3];
            $email = $row[4];
            $bio = $row[5]


            ?>

            <div class="info">
                <img src="./img/n2.png" alt="Foto">
                <h5><?php echo $voornaam; ?> <?php echo $tussenvoegsel; ?> <?php echo $achternaam; ?></h5>


                <!--                <button onclick="showInfo(this)">Meer informatie</button>-->
                <p><?php echo $email; ?></p>
                <p><?php echo $bio; ?></p>

                <ul class="social-icons">
                    <li><a href="https://www.linkedin.com/janesmith" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li><a href="https://www.twitter.com/janesmith" target="_blank"><i class="fab fa-twitter"></i></a>
                    </li>
                    <!-- Voeg hier meer social media links toe -->
                </ul>
            </div>


            <?php
        }
    }
    ?>

</div>
<!-- Voeg hier meer teamleden toe -->

</div>


<!--- footer --->
<section class="footer" data-aos="fade-down">
    <div class="footer-box">
        <h3>Het bedrijf</h3>
        <a href="overons.php">Over ons</a>
        <a href="#">Winkel</a>
        <a href="#">Contact</a>
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

    function showInfo(member) {
        var info = member.nextElementSibling;
        if (info.style.display === "none") {
            info.style.display = "block";
        } else {
            info.style.display = "none";
        }
    }

</script>

