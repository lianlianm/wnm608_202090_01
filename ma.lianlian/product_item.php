<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$product = MYSQLIQuery("SELECT * FROM products WHERE id = {$_GET['id']}")[0];

$thumbs = explode(",",$product->image_other);

$thumbs_elements = array_reduce($thumbs,function($r,$o){
   return $r."<img src='img/products/$o'>";


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

      <div class="card flat">
         <nav class="nav crumbs">
            <ul style="align-items: center;"> 
               <li><a href="index.php">Home</a></li>
               <li><a href="product_list.php">Shop</a></li>
               <li><?= $product->title ?></li>
            </ul>
         </nav>
      </div>


      <div class="card soft grid gap">
         <div class="col-xs-12 col-md-7">
            <div class="image-main">
               <img src="img/products/<?= $product->image_main ?>" alt="">
            </div>
            <div class="image-thumbs">
               <img src="img/products/<?= $product->image_main ?>" alt="">
               <!-- 此处是我自己添加的一个img为了显示image_main, 不知道为什么没有这句的话，我的自动显示不出来main？ -->
               <?= $thumbs_elements ?>
            </div>
         </div>

         <div class="col-xs-12 col-md-5">
            <form method="post" action="product_actions.php?action=add-to-cart">
               <input type="hidden" name="product-id" value="<?= $product->id ?>">

               <div class="card-section">
                  <h2><?= $product->title ?></h2>
                  <div style="font-size: 1.5em; margin-bottom: 0.5em;">&dollar;<?= $product->price ?></div>
                  <nav class="nav pills">
                     <ul>
                        <li>
                        <a href="product_list.php?t=products_by_category$category=<?= $product->category ?>"><?= $product->category ?></a>
                       </li>
                     </ul>
                  </nav class="nav pills">
               </div>

               <div class="card-section">
                  <div class="form-control">
                     <label for="product-amount" class="form-label">Amount</label>
                     <div class="grid">
                        <div class="form-select col-xs-12 col-md-6">
                           <select name="product-amount" id="product-amount">
                              <!-- option[value=$]*10>{$}  -->
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                              <option value="8">8</option>
                              <option value="9">9</option>
                              <option value="10">10</option>
                           </select>
                        </div>
                        <div class="col-xs-12 col-md-6"></div>
                     </div>
                  </div>

                  <!-- <div class="form-control">
                     <label for="product-color" class="form-label">Color</label>
                     <div class="form-select">
                        <select name="product-color" id="product-color">
                           <option value="red">Red</option>
                           <option value="green">Green</option>
                           <option value="blue">Blue</option>
                        </select>
                     </div>
                  </div> -->

                  <div class="form-control grid">
                     <div class="col-xs-12 col-md-6"><input class="btn sell" type="submit" class="form-button" value="Add To Cart"></div>
                     <div class="col-xs-12 col-md-6"></div>
                  </div>
               </div>
               <div class="card-section">
                  <ul>
                     <li>
                        <strong>Description</strong>
                        <p><?= $product->description ?></p>
                     </li>
                     <li>
                        <strong>Materials</strong>
                        <p><?= $product->material ?></p>
                     </li>
                  </ul>
               </div>
            </form>
         </div>

      </div>
      
   
         <h2 style="margin-top: 3em;">You may also like</h2>
           
         <?php

            recommendSimilar($product->category,$product->id);
         ?>
   </div>



    <?php include "parts/footer.php" ?>   

</body>
</html>