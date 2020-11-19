<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='/images/store/$o'>";
});

?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Store: <?= $product->title ?></title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>


   <div class="container">
      <div class="grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="card soft">
               <div class="image-main">
                  <img src="/images/store/<?= $product->image_thumb ?>" alt="">
               </div>
               <div class="image-thumbs">
                  <?= $thumbs_elements ?>
               </div>
            </div>
         </div>
         <div class="col-xs-12 col-md-5">
            <form class="card soft flat" method="post" action="product_actions.php?action=add-to-card">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">
               <div class="card-section">
                  <h2><?= $product->title ?></h2>
                  <div>&dollar;<?= $product->price ?></div>
               </div>
               <div class="card-section">
                  <label for="product-amount">Amount</label>
                  <div class="form-select">
                     <select name="product-amount" id="product-amount"><!-- option[value=$]*10>{$}  -->
                     option[value=$]*10>{$}
                     </select>
                  </div>
               </div>
               <div class="card-section">
                  <input type="submir" class="form-button" value="Add To Cart">
               </div>
            </form>
         </div>
      </div>
      <div class="card soft medium">
         <p><?= $product->description ?></p>
      </div>
         <h2>Related Products</h2>

         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  WHERE id in (4,6,8)
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>

</body>
</html>