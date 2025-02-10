<?php
session_start();
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    die("Et ole kirjautunut. <a href='login.php'>Kirjaudu sisään</a>");
}
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Ylläpito</title>
</head>
<body>
    <h2>Hienoa, sisällä ollaan</h2>
    <a href="logout.php">Kirjaudu ulos</a>
    
</body>
</html>