<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="/img/products/$o->image_thumb" alt="">
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


function selectAmount($amount=1,$total=10) {
   $output = "<select name='product-amount'>";
   for($i=1;$i<=$total;$i++) {
      $output .= "<option ".()
   }
}




function makeCartList($r,$o) {
$totalfixed = number_format($o->total,2,'.','');
$selectAmount = selectAmount($o->amount,10);
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="/images/store/$o->image_thumb">
   </div>
   <div class="flex-stretch">
      <strong>$o->title</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      <div>&dollar;totalfixed</div>
      <form action="product_actions.php?action=update-cart-item" method="post"></form>
      &dollar;$o->price
   </div>
</div>
HTML;
}




function cartTotals() {

$cart = getCartItems();

$cartprice = array_reduce($cart,function($r,$o){return $r+$o->tota;},0);

$tax = 

$taxed = 

return <<<HTML

<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Sub Total</strong></div>
   <div class="flex-none">Total = &dollar;$cartprice;</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Taxes</strong></div>
   <div class="flex-none">Total = &dollar;$tax;</div>
</div>
<div class="card-section display-flex">
   <div class="flex-stretch"><strong>Total</strong></div>
   <div class="flex-none">Total = &dollar;$taxed;</div>
</div>
<div class="card-section">
  <a href="product_checkout.php" class="form-button">Checkout</a>
</div>


HTML;
}





