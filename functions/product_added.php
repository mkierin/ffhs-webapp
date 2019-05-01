<?php
session_start();
$core_path = dirname(__FILE__);
if (isset($_GET["cart_add"])) {

$data_temp = unserialize(base64_decode($_GET["cart_add"]));


array_push($_SESSION['cart'], $data_temp);

//var_dump($_SESSION['cart']);


}

//echo '<a href="index.php">continue shopping</a><p>or</p><a href="index.php?page=Cart">finalize your order</a>';

 ?>
