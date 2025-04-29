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
<?php
  if (empty($cart)): ?>
<h3> Your Cart is Empty</h3>

<?php
  else: 
?>

<ul>
<?php
  $total = 0;

  foreach ($cart as $item) {
    if ($item === 'book1') {
      echo "<li>Ascendance of a Bookworm - \$15.56</li>";
      $total += 15.56;
    }elseif ($item === 'book2') {
      echo "<li>Blitz Volume 1 - \$16.20</li>";
        $total += 16.20;
    }elseif ($item === 'book3') {
      echo "<li>Keeper of the Lost Cities Volume 1 - \$8.52</li>";
        $total += 8.52;
    }elseif ($item === 'book4') {
      echo "<li>The SCP Foundation: Iris - \$12.26</li>";
        $total += 12.26;
    }elseif ($item === 'book5') {
      echo "<li>Dork Diaries< - \$5.30</li>";
        $total += 5.30;
    }
  }
?>
  

  <h2>Total: $<?php echo $total;?></h2>

<?php endif;?>
