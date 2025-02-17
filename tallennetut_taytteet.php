<?php
session_start();

// Save excluded toppings in session
$_SESSION['excluded_toppings'] = $_POST['toppings'] ?? [];

// Redirect back to index.php
header("Location: index.php");
exit;
?>