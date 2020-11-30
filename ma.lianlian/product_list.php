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
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Lest Expensive"]
   ];
   //DESC是descend降序, ASC是ascend升序//

   foreach ($options as[$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}



$result = makeStatement($_GET['t']);
$product = isset($result['error']) ? [] : $result;



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>Product List</title>

   <?php include "parts/meta.php" ?>
</head>
<body>
   
   <?php include "parts/navbar.php" ?>

   <div class="container">
      
      <form action="product_list.php" method="get" class="hotdog stack">
         <input type="search" name="s" placeholder="Search for a Product" value="<?= @$_GET['s'] ?>">

         <?
         makeHiddenValues([
            "orderby"=>$_GET['orderby'],
            "orderby_direction"=>$_GET['orderby_direction'],
            "limit"=>$_GET['limit'],
            "t"=>"search"
         ],[]);
         ?>
         <button type="submit">Search</button>
      </form>

      <div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"hui",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Hui" class="form-button">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"gray", 
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Gray" class="form-button">
            </form>

            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"angle",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Angle" class="form-button">
            </form>
         </div>
         <div class="flex-stretch"></div>
         <div class="flex-none">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
      </div>


      <h2>Product List</h2>


      <div class="grid gap">
           
         <?php
         echo array_reduce(
            $products,
            'makeProductList'
         );
         ?>
      </div>
   </div>



   <?php include "parts/footer.php" ?>   

</body>
</html>