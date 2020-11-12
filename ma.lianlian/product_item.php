<?php

include_once "lib/php/functions.php";

$product = MYSQLIQuery("SELECT *FROM prducts WHERE id = {$_GET")

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>

    <?php include "parts/meta.php" ?>
</head>

<body>

    <?php include "parts/navbar.php" ?>
    

    <div class="container">
        <div class="grid gap">

        <!-- <h2>Product Item</h2> -->
<!-- 
            <?php
            // echo array_reduce(
            //          MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}"),
            //          function($r,$o) {
            //             return $r."<div>$o->title</div>";
            //          }
            //     );
            ?> 
 -->

        



            <!-- <div>This is the product #<?= $_GET['id'] ?></div> -->
            <div><a href="added_to_cart.php">Add To Cart</a></div>
        </div>
    </div>
    
</body>
</html>