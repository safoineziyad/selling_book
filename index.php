<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $book = $_POST['book'];

  switch ($book) {
    case 'book1':
      header("Location: ./html/bookworm.html");
      exit;

    default:
      header("Location: index.html");
      exit;
  }
}
?>
