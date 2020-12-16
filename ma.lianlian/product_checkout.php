<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Checkout</title>

    <?php include "parts/meta.php" ?>
</head>

<body>

    <div class="container">
        <h2 style="text-align: center;">Checkout</h2>
       

        <div style="padding:1em;">
        <strong>Shipping Information</strong>
            <div class="card soft" >
                <form>
                   <div class="form-control">
                        <label class="form-label">Full name (First and Last name)</label>
                        <input type="text" placeholder="Full name (First and Last name)" class="form-input-border">
    
                        <label class="form-label">Address</label>
                        <input type="search" placeholder="Street address,P.O.box, company name, c/o" class="form-input-border">
                        <input type="password" placeholder="Apartment, suite, uni, building, floor, etc" class="form-input-border">
    
                        <label class="form-label">City</label>
                        <input type="password" placeholder="" class="form-input-border">
    
                        <label class="form-label">State/Province</label>
                        <input type="password" placeholder="State" class="form-input-border">
    
                        <label class="form-label">Country/Region</label>
                        <div class="form-select-border">
                            <select>
                                <option>United States</option>
                                <option>China</option>
                                <option>Japan</option>
                            </select>
                        </div>
        
                       <label class="form-label">Zip Code</label>
                       <input type="password" placeholder="" class="form-input-border">

                       <label class="form-label">Phone number</label>
                       <input type="password" placeholder="" class="form-input-border">
                   </div>
                </form>
            </div>
        </div>

        <div style="padding:1em;">
            <strong>Payment Information</strong>
            <div class="card soft" >
                <form>
                   <div class="form-control">
                        <label class="form-label">Name on card</label>
                        <input type="password" placeholder="First and Last name" class="form-input-border">

                        <label class="form-label">Card number</label>
                        <input type="password" placeholder="Card number" class="form-input-border">

                        <label class="form-label">Expiration date</label>
                        <input type="password" placeholder="State" class="form-input-border">

                        <label class="form-label">Security code</label>
                        <input type="password" placeholder="CVV" class="form-input-border">
                   </div>
                </form>
            </div>
        </div>

        <div class="grid">
            <div class="col-xs-2 col-md-2"></div>
            <div class="col-xs-4 col-md-6">
                <a href="./" class="btn inline">Cancel</a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="product_actions.php?action=reset-cart" class="btn sell inline">Place your order</a>
            </div>
        </div>

    </div>
    

    <?php include "parts/footer.php" ?>   
</body>
</html>