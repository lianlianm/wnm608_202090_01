<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";



setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');


function makeSortOptions() {
   $option = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Lest Expensive"]
   ];

   foreach ($options as[$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$directio ? "selected" : "").">
      $title
      </option>";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}



if(isset($_GET['t'])) {
   
   $result = makeStatement($_GET['t']);
   $product = isset($result['error']) ? [] : $result;
   
} else {
   $result = makeStatement('products_all');
   $product = isset($result['error']) ? [] : $result;
}



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container">
      
      <form action="product_list.php" method="get" class="hotdog">
         <input type="hidden" name="t" value="search">
         <input type="search" name="s" placeholder="Search for a Product" value="<?=$_GET['s'] ?>">
      </form>

      <div></div>



         <h2>Product List</h2>


         <div class="grid gap">
           
            <?php

            echo array_reduce(
               MYSQLIQuery("
                  SELECT *
                  FROM products
                  ORDER BY date_create DESC
                  LIMIT 15
               "),
               'makeProductList'
            );

            ?>
         </div>
   </div>



    <?php include "parts/footer.php" ?>   

</body>
</html>