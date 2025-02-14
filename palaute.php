<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nimi = htmlspecialchars($_POST["nimi"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $palaute = htmlspecialchars($_POST["palaute"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Virheellinen sähköpostiosoite!";
        exit;
    }

    $to = "amk1005480@student.hamk.fi";
    $subject = "Uusi palaute Pizzagate-sivustolta";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    
    $message = "Nimi: $nimi\n";
    $message .= "Sähköposti: $email\n";
    $message .= "Palaute:\n$palaute\n";

    if (mail($to, $subject, $message, $headers)) {
        header("Location: kiitos.html");
        exit;
    } else {
        echo "Viestin lähetys epäonnistui. Yritä uudelleen myöhemmin.";
    }
} else {
    echo "Virhe: Lomaketta ei ole lähetetty oikein.";
}
?>

