<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Thanks</title>

    <?php include "parts/meta.php" ?>
</head>

<body>
	<?php include "parts/navbar.php" ?>


	<div class="container" style="margin: 5em auto;">
        <div class="card">
            <h1 style="text-align:center;color:#2A6AA3;">Thanks for Purchasing!</h1>
            <p style="text-align:center;">You will receive an email when your order has shipped.</p>      
        </div>  
        


        <div class="card">
        	<h2>You may also like</h2>
        	<?php recommendNew(); ?>
        </div>
  


        <div class="grid gap card">
            <div class="col-xs-0 col-md-4"></div>
            <div class="col-xs-12 col-md-4">
                <a href="product_list.php" class="btn sell">Continue shopping</a>
            </div>
            <div class="col-xs-0 col-md-4"></div>
        </div>
 
    </div>
    
    
    <?php include "parts/footer.php" ?>   
</body>
</html>