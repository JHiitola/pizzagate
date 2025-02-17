<?php
session_start();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}


// Get excluded toppings from session
$excluded_toppings = $_SESSION['excluded_toppings'] ?? [];

// Define all available toppings
$toppings = ["Juusto", "Kinkku", "Pepperoni", "Salami", "Ananas", "Tomaatti", 
            "Tonnikala", "Sienet", "Paprika", "Jalapeño", "Sipuli", "Oliivit", 
            "Katkarapu", "Aurajuusto", "Kana", "Chorizo", "Pekoni", "Valkosipuli", 
            "Rucola", "Basilika", "Parmankinkku", "Artisokka", "Kaprikset", 
            "Maissi", "Punasipuli", "Cheddar", "Parmesaani", "Chililastut", 
            "BBQ-kastike", "Pinaatti"];

// Remove excluded toppings
$toppings = array_diff($toppings, $excluded_toppings);

// Ensure at least 4 toppings are available
if (count($toppings) < 4) {
    echo "<h2>Error:Liikaa inhokkeja, kokeile ainakin 4 täytettä.</h2>";
    echo "<a href='taytteet.php'><button>Takaisin</button></a>";
    exit;
}

// Randomly select 4 toppings
$random_keys = array_rand($toppings, 4);
$random_toppings = array_map(fn($key) => $toppings[$key], $random_keys);
?>
<!DOCTYPE html>
<html lang="fi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tyyli.css">
    <title>Pizzagate - Etusivu</title>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
  </head>
  <body>
   
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

    <!-- Main Content -->
  <main>
    <h2>Paina pizzan kuvaa ja arvo itsellesi neljä täytettä!</h2>
 
  <div class="container">
      <div class="content-wrapper">
        <div class="image-container">
        <form method="POST">
                    <button type="submit" class="pizza-button" style="background:none; border:none; cursor:pointer;">
                        <img src="pizza.png" alt="Click to Generate" class="img-fluid rounded">
                    </button>
                </form>
            </div>
                       <h2>Sinulle arvotut täytteet:</h2>
    <div class="toppings">
        <p><?php echo implode(" - ", $random_toppings); ?></p>
</div>
</main>
          
    <!-- Footer -->
    <footer>
        <img src="roundozza.png" alt="Logo" />
      <p>© 2025 Kaikki meistä voidaan pidättää</p>
      <a href="admin/index.php">Ylläpito</a>
    </footer>
  </body>
</html>