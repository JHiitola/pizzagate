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
    <title>Pizzagate ylläpito</title>
</head>
<body>
    <h2>Pizzagate-sivuston admin-alue</h2>
    <br>
    <a href="index.html">Linkki indexiin</a>
    <br>
    <a href="tietokanta">Tietokantaan tästä</a>
    <br>
    <a href="logout.php">Kirjaudu ulos</a>
    
</body>
</html>