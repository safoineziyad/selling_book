<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Book Galaxy</title>
  <link href="../css/checkout.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Choose a Payment Method: </h1>
  <label>
    <img src="../img/credit-card.png">
    Credit Card
    <input type="radio" name="payment_method" value="credit_card" required>
  </label><br>

  <label>
    <img src="../img/paypal.png">
    PayPal
    <input type="radio" name="payment_method" value="paypal">
  </label><br>

  <label>
    <img src="../img/monero.png">
    Monero (XMR)
    <input type="radio" name="payment_method" value="monero">
  </label><br><br>

  <button type="submit" name="delivery"><a href="./delivery.html">Next</button>

</body>
</html>
