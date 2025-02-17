<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tyyli.css">
    <title>Pizzagate - Täytteet</title>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  </head>
  <body>
    <style>
      

      /* täytteiden oma laastikko */
      .toppings-section {
        max-width: 590px;
        margin: 40px auto;
        padding: 20px;
        background: (255, 255, 255);
        border-radius: 10px;
        box-shadow: 0 2px 4px rgba(170, 160, 67, 0.1);
        text-align: center;
      }

      .toppings-section h2 {
        font-family: "Poetsen One", cursive;
        font-size: 28px;
        color: rgb(180, 37, 35);
      }

      .toppings-list {
        list-style-type: none;
        padding: 0;
      }

      .toppings-list li {
        font-size: 18px;
        padding: 5px;
        border-bottom: 1px solid #ddd;
      }

      .toppings-list li:last-child {
        border-bottom: none;
      }
    </style>
    
    <!-- Hero Section -->
    <section class="hero-section" role="region" aria-label="Hero Section">
      <div class="hero-content">
        <!-- Nappulat -->
        <a href="index.php">
        <button class="primary-button" type="button" aria-label="Etusivu">Etusivu</button> </a>

        <a href="taytteet.php">
        <button class="primary-button" type="button" aria-label="Asetukset">Täytteet</button></a>

        <a href="yhteystiedot.html">
        <button class="primary-button" type="button" aria-label="Asetukset">Yhteystiedot</button></a>

        <a href="palaute.html">
        <button class="primary-button" type="button" aria-label="Asetukset">Palaute</button></a>
      </div>
    </section>

    <!-- Täytteet-osio -->
   

<?php



$excluded_toppings = $_SESSION['excluded_toppings'] ?? [];


$toppings = ["Juusto", "Kinkku", "Pepperoni", "Salami", "Ananas", "Tomaatti", 
            "Tonnikala", "Sienet", "Paprika", "Jalapeño", "Sipuli", "Oliivit", 
            "Katkarapu", "Aurajuusto", "Kana", "Chorizo", "Pekoni", "Valkosipuli", 
            "Rucola", "Basilika", "Parmankinkku", "Artisokka", "Kaprikset", 
            "Maissi", "Punasipuli", "Cheddar", "Parmesaani", "Chililastut", 
            "BBQ-kastike", "Pinaatti"];

?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <title>Valitse inhokit</title>
</head>
<body>
    <section class="toppings-section">

    <h2>Valitse täytteet, joita ET halua pizzaasi</h2>
  
    <form method="POST" action="tallennetut_taytteet.php">
        <ul class="toppings-list">
            <?php
            foreach ($toppings as $topping) {
                $checked = in_array($topping, $excluded_toppings) ? "checked" : "";
                echo "<li><input type='checkbox' name='toppings[]' value='$topping' $checked> $topping</li>";
            }
            ?>
        </ul>
        <button type="submit">Tallenna inhokit</button>
    </form>
          </section>
    

</body>

    <!-- Footer -->
    <footer>
      <img src="roundozza.png" alt="Logo" />
      <p>© 2025 Kaikki meistä voidaan pidättää</p>
      <a href="admin/index.php">Ylläpito</a>
    </footer>
  </body>
</html>