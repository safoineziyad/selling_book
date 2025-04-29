<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['book'])) {
  $book = $_POST['book'];

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  if (count($_SESSION['cart']) < 5) {
    $_SESSION['cart'][] = $book;
  }

  header('Location: ./html/cart.php');
  exit;
}
?>
