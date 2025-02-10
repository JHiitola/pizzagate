<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Admin sisäänkirjautuminen</title>
</head>
<body>
    <h2>Kirjautuminen sisään admin-alueelle</h2>
    <form action="checkpw.php" method="post">
        <label>Salasana:</label>
        <input type="password" name="password" required>
        <button type="submit">Kirjaudu</button>
    </form>
   
</body>
</html>