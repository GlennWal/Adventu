<?php
session_start();
require_once "database/conn.php";

if (isset($_SESSION['user'])) {
    $email = $_SESSION['user'];

    // SQL query to delete the user from the database
    $sql = "DELETE FROM users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
    }

    // Destroy the session and redirect to the homepage
    session_destroy();
    header("Location: index.php");
    exit();
} else {
    // Redirect to the login page if the user is not logged in
    header("Location: inloggen.php");
    exit();
}
?>
