<?php
session_start();
require_once "database/conn.php";

if (!isset($_SESSION['user'])) {
    echo "Je moet ingelogd zijn om je profiel bij te werken.";
    exit();
}

$email = $_SESSION['user'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $voornaam = $_POST['voornaam'];
    $tussenvoegsel = $_POST['tussenvoegsel'];
    $achternaam = $_POST['achternaam'];
    $nieuwe_email = $_POST['email'];
    $geboortedatum = $_POST['geboortedatum'];
    $telefoonnummer = $_POST['telefoonnummer'];

    $sql = "UPDATE users SET voornaam = ?, tussenvoegsel = ?, achternaam = ?, email = ?, geboortedatum = ?, telefoonnummer = ? WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $voornaam, $tussenvoegsel, $achternaam, $nieuwe_email, $geboortedatum, $telefoonnummer, $email);

    if ($stmt->execute()) {
        $_SESSION['user'] = $nieuwe_email; // Update session email if changed
        echo "Profiel succesvol bijgewerkt.";
    } else {
        echo "Er is een fout opgetreden bij het bijwerken van je profiel.";
    }

    $stmt->close();
}
?>
