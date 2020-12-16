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
        </div>  
        


        <div class="card">
        	<h2>You may also like</h2>
        	<?php recommendNew(); ?>
        </div>
  


        <div class="card">
                <a href="product_list.php" class="btn sell inline">Continue to shopping</a>
        </div>
  
    </div>
    
    
    <?php include "parts/footer.php" ?>   
</body>
</html>