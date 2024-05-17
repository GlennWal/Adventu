<?php session_start() ?>
<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (integrity hash)" crossorigin="anonymous" />


<a href="./index.php" class="logo">Adventu</a>

<ul class="navlist">
    <li><a href="./shop.php">Onze winkel</a></li>
    <li><a href="#">Nu gearriveerd</a></li>
    <li><a href="./contact.php">Contact</a></li>
</ul>

        <?php if (isset($_SESSION["user"])) { ?>


            <div class="Registreren">
                <div class="dropdown">
                    <button class="Dropbtn"><i class="fas fa-user"></i></button>
                    <div class="dropdown-content">
                        <a href="./mijnprofiel.php"><i class="fas fa-user"></i> Mijn Profiel</a>
                        <a href="./uitloggen.php"><i class="fas fa-shopping-cart"></i> Winkelwagen</a>
                        <a href="./uitloggen.php"><i class="fas fa-sign-out-alt"></i> Uitloggen</a>
                        <div class="dropdown-submenu">
                        </div>
                    </div>
                </div>
            </div>

        <?php } else {?>
<div class="nav-right">
    <div class="dropdown">
        <a href="#" onmouseover="showDropdown()">
            <i class="ri-user-line"></i>
        </a>
        <div class="dropdown-content" id="dropdownContent">
            <a href="./inloggen.php">Inloggen</a>
            <a href="./registreren.php">Registreren</a>
        </div>
    </div>
    <div class="bx bx-menu" id="menu-icon"></div>
</div>
<?php } ?>

        <script>
            function toggleSettings() {
                var submenu = document.getElementsByClassName("dropdown-submenu-content")[0];
                submenu.classList.toggle("show");
            }


        </script>

