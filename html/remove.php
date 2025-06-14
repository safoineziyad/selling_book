<?php
session_start();

if (isset($_POST['remove_item'])) {
    $remove = $_POST['remove_item'];
    foreach ($_SESSION['cart'] as $i => $item) {
        if ($item === $remove) {
            unset($_SESSION['cart'][$i]); 
            $_SESSION['cart'] = array_values($_SESSION['cart']); 
            break;
        }
    }
}

if (isset($_POST['clear_cart'])) {
    $_SESSION['cart'] = [];
}

header("Location: cart.php");
exit();
