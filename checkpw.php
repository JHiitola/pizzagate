<?php
session_start();
$correct_password = "testi"; // Kovakoodattu salasana
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["password"] === $correct_password) {
        $_SESSION["loggedin"] = true;
        header("Location: admin.php");
        exit();
    }
    else
    {
        echo "Väärä salasana. <a href='login.php'>Yritä uudelleen</a>";
    }
}
?>