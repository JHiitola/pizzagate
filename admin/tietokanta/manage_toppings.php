<?php
$servername = "localhost";
$username = "trtkm24a_6";
$password = "tbdylgno";
$dbname = "wp_trtkm24a_6";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $sql = "INSERT INTO toppings (name) VALUES ('$name')";
        $conn->query($sql);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM toppings WHERE id=$id";
        $conn->query($sql);
    }
}

$sql = "SELECT * FROM toppings ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzagate - Hallinnoi täytteitä</title>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poetsen One', sans-serif;
            background-color: rgb(30, 46, 31);
            color: #f8f8f8;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }
        button {
            padding: 8px 12px;
            font-size: 0.9rem;
            background-color: rgb(219, 2, 2);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background-color: rgb(143, 2, 2);
        }
        table {
            width: 80%;
            max-width: 600px;
            border-collapse: collapse;
            background: rgba(188, 194, 190, 0.1);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        th, td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: rgba(255, 255, 255, 0.1);
        }
        footer {
            margin-top: 40px;
            font-size: 0.9rem;
            opacity: 0.7;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Hallinnoi täytteitä</h1>

        <form method="post" action="manage_toppings.php">
            <input type="text" name="name" placeholder="Täytteen nimi" required>
            <button type="submit" name="add">Lisää</button>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Nimi</th>
                <th>Toiminnot</th>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>"
                        . "<form method='post' action='manage_toppings.php' style='display:inline;'>"
                        . "<input type='hidden' name='id' value='" . $row["id"] . "'>"
                        . "<button type='submit' name='delete'>Poista</button>"
                        . "</form></td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>Ei täytteitä</td></tr>";
            }
            ?>
        </table>

        <a href="../index.php" style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: rgb(219, 2, 2); color: white; text-decoration: none; border-radius: 8px; font-size: 1rem; transition: 0.3s;">
            ⬅️ Palaa Ylläpitoon
        </a>
    </div>

    <footer>
        <p>© 2025 Pizzagate | Ylläpito</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
