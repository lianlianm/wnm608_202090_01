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
      ["price","ASC","Least Expensive"]
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
$products = isset($result['error']) ? [] : $result;




// 之前的function makeProductlist($r,$o) {
//     echo $r.<<<HTML
//     <div class="col-xs-12 col-md-4">
//     <a href="#" class="product-item">
//         <figure>
//            <div class="product-image">
//               <img src="img/products/$o->thumbnail" alt="">
//            </div>
//            <figcaption class="product-description">
//               <div class="product-price">&dollar;$o->price</div>
//               <div class="product-title">$o->title</div>
//            </figcaption>
//         </figure>
//     </a>
// </div>
// HTML;
// }

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
      <input type="search" name="s" placeholder="Search for a Product" value="<?= @$_GET['s'] ?>">

      <?
      makeHiddenValues([
         "orderby"=>$_GET['orderby'],
         "orderby_direction"=>$_GET['orderby_direction'],
         "limit"=>$_GET['limit'],
         "t"=>"search"
      ],[]);
      ?>
      <button type="submit" style="border:none;"><img src="img/icons/search.svg" alt="" class="icon" type="submit"></button>

    </form>

    <div class="grid" style="margin:1em 0; align-items: center;">
      <div class="col-xs-12 col-md-4">
        <div class="flex-none display-flex">
          <form action="product_list.php" method="get" style="margin:0 1em;">
            <?
            makeHiddenValues($_GET,[
               "category"=>"hui",
               "t"=>"products_by_category"
            ]);
            ?>
            <input type="submit" value="Hui" class="btn color-option">
          </form>
          <form action="product_list.php" method="get" style="margin:0 1em;">
            <?
            makeHiddenValues($_GET,[
               "category"=>"gray", 
               "t"=>"products_by_category"
            ]);
            ?>
            <input type="submit" value="Gray" class="btn color-option">
          </form>
          <form action="product_list.php" method="get" style="margin:0 1em;">
            <?
            makeHiddenValues($_GET,[
               "category"=>"angle",
               "t"=>"products_by_category"
            ]);
            ?>
            <input type="submit" value="Angle" class="btn color-option">
          </form>
        </div>
      </div>
      <!-- <div class="flex-stretch"></div> -->
      <div class="col-xs-12 col-md-4"></div>
      <div class="col-xs-12 col-md-4">
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
    </div>


    <div class="card">
      <h2>Product List</h2>
      
      
      <div class="grid gap">
           
        <?php
        echo array_reduce(
        $products,
        'makeProductList'
         );
      
        ?>
      
           <!-- <?php 
                  // $conn = makeConn();
                  // $result = @$conn->query("SELECT * FROM products");
                  // if($conn->errno) die($conn->error);
                  // while($row = $result->fetch_object()) {
                  //     echo "<li>$row->title</li>";
                  // }
                  // $arr = MYSQLIQuery("SELECT * FROM products");
                  // print_p($arr);
                  // echo array_reduce(
                  //      MYSQLIQuery("SELECT * FROM products"),
                  //      function($r,$o) {
                  //         return $r."<li>
                  //         <a href='product_item.php?id=$o->id'>$o->title - &dollar;$o->price</a>
                  //         </li>";
                  //      }
                  // );
                   ?> -->
        </div>
    </div>
  </div>

  <div class="container" style="margin:5em auto">
    <div class="card soft">
      <a href="admin"><h2>Product Admin</h2></a>
    </div>
  </div>


   <?php include "parts/footer.php" ?>   

</body>
</html>