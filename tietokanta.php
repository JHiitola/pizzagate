<?php
$servername = "localhost";
$username = "trtkm24a_6";
$password = "tbdylgno";
$dbname = "wp_trtkm24a_6";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM toppings";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzagate - Hallinnoi Täytteitä</title>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="tyyli.css">
</head>
<body>

    <div class="container">
        <h1>Hallinnoi Täytteitä</h1>

        <table>
            <tr>
                <th>ID</th>
                <th>Nimi</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
                }
            } else {
                echo "<tr><td colspan='2'>Ei täytteitä</td></tr>";
            }
            ?>
        </table>
    </div>

    <footer>
        <p>© 2025 Pizzagate | Ylläpito</p>
    </footer>

</body>
</html>

<?php
$conn->close();
?>