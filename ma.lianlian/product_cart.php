<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";



$cart = getCartItems();

//print_p($cart);


?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Cart</title>

    <?php include "parts/meta.php" ?>
</head>

<body>

    <?php include "parts/navbar.php" ?>


    <div class="container" style="margin-top:4em;">
        <div class="grid gap">
            <div class="col-xs-12 col-md-8">
                <div class="card soft">
                    <h2>Your Cart</h2>
                    <table class="table lined horizontal">
                        <thead>
                            <tr>
                                <th class="heading-medium">Item</th>
                                <th class="heading-medium"></th>
                                <th class="heading-medium">Quality</th>
                                <th class="heading-medium">Price</th>
                                <th class="heading-medium"></th>
                            </tr>
                        </thead>
                        <tbody>
                        <? 
                            echo array_reduce($cart,'makeCartList');
                            ?> 
                            
                        </tbody>
                    </table>    
                </div>
            </div>
            
            <div class="col-xs-12 col-md-4">
                <div class="card soft">
                    <div class="card-section">
                        <h2>Totals</h2>
                    </div>
                    <?= cartTotals() ?>
                </div>
            </div>
        </div>
    </div>
    


    <?php include "parts/footer.php" ?>   
</body>
</html>