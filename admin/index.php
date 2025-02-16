<?php
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzagate Ylläpito</title>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
    <style>
        
        body {
            font-family: 'Poetsen One', sans-serif;
            background-color:rgb(30, 46, 31);
            color: #f8f8f8;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
            margin-top: 20px;
            font-size: 2rem;
            text-transform: uppercase;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
        }

        /* Admin-paneelin linkit */
        .admin-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
            background: rgba(188, 194, 190, 0.1);
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 300px;
        }

        .admin-links a {
            display: block;
            padding: 12px;
            background:rgb(219, 2, 2);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .admin-links a:hover {
            background:rgb(143, 2, 2);
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
        <h1>Pizzagate Ylläpito</h1>

        <div class="admin-links">
            <a href="../index.html">🏠 Paluu etusivulle</a>
            <a href="manage_toppings.php">🍕 Hallinnoi täytteitä</a>
            <a href="randomizer.php">🎲 Satunnaisnappulan asetukset</a>
            <a href="tilastot.php">📊 Täytetilastot</a>
        </div>
    </div>

    <footer>
        <p>© 2025 Pizzagate | Ylläpito</p>
    </footer>

</body>
</html>
