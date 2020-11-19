<?php

include_once "lib/php/functions.php";
$product = MYSQLIQuery("SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

$cart_product = cartItemById($_GET['id']);

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Added Product To Cart</title>

   <?php include "parts/meta.php" ?>
</head>
<body>

   <?php include "parts/navbar.php" ?>

   <div class="container">
      <div class="card soft">
         <h2>Added <?= $product->title ?> To Cart</h2>

         <p>There are now <?= $cart_product->amount ?> of <?= $product->title ?> in your cart.</p>

         <a href="product_list.php">Back to shopping</a>
      </div>
   </div>

</body>
</html>