<?php
//learn more button redirect
if ($_SERVER["REQUEST_METHOD"] === "POST") {

  if (isset($_POST['book'])) {
  $book = $_POST['book'];

  switch ($book) {
    case 'book1':
      header("Location: ./html/bookworm.html");
      exit;

    case 'book2':
      header("Location: ./html/blitz.html");
      exit;

    case 'book3':
      header("Location: ./html/kotlc.html");
      exit;

    case 'book4':
      header("Location: ./html/SCP.html");
      exit;
    case 'book5':
      header("Location: ./html/dork.html");
      exit;

    default:
      header("Location: index.html");
      exit;
   }
 }

//cart button redirect
  if (isset($_POST['cart'])) {
    $cart = $_POST['cart'];

    switch ($cart) {
      case 'cart-empty':
        header("Location: ./html/cart.php");
        exit;
      
      default:
        header("Location: index.html");
        exit;
    }
  }
}

?>
