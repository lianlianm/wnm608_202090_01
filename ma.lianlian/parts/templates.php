<?php


function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="img/products/$o->image_main" alt="">
         </div>
         <figcaption class="product-description">
            <div class="product-price">&dollar;$o->price</div>
            <div class="product-title">$o->title</div>
         </figcaption>
      </figure>
   </a>
</div>
HTML;
}
//调出在database中的所有产品，$r是reducing value,$o是current object.


function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".($i==$amount?'selected':'').">$i</option>";
   }
   $output .= "</select>";
   return $output; 
}




function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectamount = selectAmount($o->amount,10);
return $r.<<<HTML
<tr>

<!-- <td>
    <div class="form-control">
        <input type="checkbox">
    </div>
</td> -->
<td>
   <div class="display-flex"> 
      <img src="img/products/$o->image_main" alt="" style="height:80px">
   </div>
</td>
<td>
   <div class="display-flex">
      <strong>$o->title</strong>
   </div>
</td>
<td>
   <form action="product_actions.php?action=update-cart-item" method="post" onchange="this.submit()">
      <input type="hidden" name="product-id" value="$o->id">
         <div class="form-select" style="font-size:0.8em">
            $selectamount
         </div>
   </form>
</td>
<td>&dollar;$totalfixed</td>
<td>
   <form action="product_actions.php?action=delete-cart-item" method="post">
      <input type="hidden" name="product-id" value="$o->id">
      <input type="submit" value="Delete" class="form-button inline" style="font-size:0.8em">
   </form>
</td>
</tr>

HTML;
}




function cartTotals() {

$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->total;},0);

$pricefixed = number_format($cartprice,2,'.','');

$tax = number_format($cartprice*0.0725,2,'.','');

$taxed = number_format($cartprice*1.0725,2,'.','');


return <<<HTML

<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Sub Total</strong></div>
   <div class="flex-none">&dollar;$cartprice;</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Taxes</strong></div>
   <div class="flex-none">&dollar;$tax;</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Total</strong></div>
   <div class="flex-none">&dollar;$taxed;</div>
</div>
<div class="card-section">
  <a href="product_checkout.php" class="btn sell">Checkout</a>
</div>


HTML;
}




function makeAdminList($r,$o) {
return $r.<<<HTML
<div class="grid gap card soft" style="margin-bottom: 0;">

   <div class="col-xs-12 col-md-3">
      <div class="image-thumbs">
         <img src="img/products/$o->image_main" style="width: 150px;
    height: 150px;">
      </div>
   </div>

   <div class="col-xs-12 col-md-6">
      <div>
         <div><strong>$o->title</strong></div>
         <div>$o->category</div>
         <div>$o->price</div>
      </div>
   </div>

   <div class="col-xs-12 col-md-3">
      <div class="flex-none">
         <div class="card-section"><a href="admin/?id=$o->id" class="form-button">Edit</a></div>
         <div class="card-section"><a href="product_item.php?id=$o->id" class="form-button">View</a></div>
      </div>
   </div>
</div>
HTML;
}

function makeRecommend($a) {
$products = array_reduce($a,'makeProductList');
echo <<<HTML
<div class="grid gap productlist">$products</div>
HTML;
}



function recommendSimilar($cat,$id=0,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat' AND
            `id` <> $id
         ORDER BY rand()
         LIMIT $limit
      ");
   makeRecommend($result);
}

function recommendCategory($cat,$limit=3) {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         WHERE
            `category`='$cat'
         ORDER BY `date_create` DESC
         LIMIT $limit
      ");
   makeRecommend($result);
}


// 以下是我自己参照写的新到产品推荐的function
function recommendNew() {
   $result = MYSQLIQuery("
         SELECT *
         FROM products
         
         ORDER BY `date_create` DESC
         LIMIT 3
      ");
   makeRecommend($result);
}
