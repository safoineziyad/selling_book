<?php
  session_start();
  $cart = $_SESSION['cart'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Galaxy</title>
  <link href="../css/cart.css" rel="stylesheet" type="text/css">
</head>
<body>
  <nav class="navbar">
    <div class="navdiv">
    <ul>
      <li><a href="../index.html">Home</a></li>      
      <li><a href="html/about_us.html">About</a></li>
      <li><a href="#">New Arrivals</a></li>
      <li><a href="html/contact.html">Contact</a></li>
    </ul>
    </div>
  </nav>

<h1>Your Cart: </h1>

<?php if (empty($cart)): ?>
  <h3>Your Cart is Empty</h3>
<?php else: ?>
  <ul>
<?php
  $total = 0;

  foreach ($cart as $item) {
    echo '<div class="cart-entry">';

    if ($item === 'book1') {
        echo '<img src="../img/bookworm.png">';
        echo '<li class="cart-item">Ascendance of a Bookworm - $15.56</li>';
        $price = 15.56;
    } elseif ($item === 'book2') {
        echo '<img src="../img/blitz.jpg">';
        echo '<li class="cart-item">Blitz Volume 1 - $16.20</li>';
        $price = 16.20;
    } elseif ($item === 'book3') {
        echo '<img src="../img/KLoTC.jpg">';
        echo '<li class="cart-item">Keeper of the Lost Cities Volume 1 - $8.52</li>';
        $price = 8.52;
    } elseif ($item === 'book4') {
        echo '<img src="../img/SCP.jpg">';
        echo '<li class="cart-item">The SCP Foundation: Iris - $12.26</li>';
        $price = 12.26;
    } elseif ($item === 'book5') {
        echo '<img src="../img/dork.jpg">';
        echo '<li class="cart-item">Dork Diaries - $5.30</li>';
        $price = 5.30;
    }

    echo '<form method="POST" action="remove.php" style="display:inline">';
    echo '<input type="hidden" name="remove_item" value="' . $item . '">';
    echo '<button class="delete" type="submit">Remove</button>';
    echo '</form>';

    echo '</div>';
    $total += $price;
  }
?>

  </ul>


<h2>Total: $<?php echo number_format($total, 2); ?></h2>

<form method="POST" action="checkout.php">
  <button type="submit" name="checkout" style="margin-top: 20px;">Proceed to Checkout</button>
</form>
  <form method="POST" action="remove.php">
    <input type="hidden" name="clear_cart" value="1">
    <button type="submit" class="deleteall">Clear Cart</button>
  </form>

<?php endif; ?>

</body>
</html>
