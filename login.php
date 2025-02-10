<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Kirjaudu sisään</title>
</head>
<body>
    <h2>Kirjaudu sisään</h2>
    <form action="checkpw.php" method="post">
        <label>Salasana:</label>
        <input type="password" name="password" required>
        <button type="submit">Kirjaudu</button>
    </form>
    <p>(helpotuksena, oikea salasana on 'testi')</p>
</body>
</html>