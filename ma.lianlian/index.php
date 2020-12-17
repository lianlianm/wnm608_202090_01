<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
//include_once 语句在脚本执行期间包含并运行指定文件。此行为和 include 语句类似，唯一区别是如果该文件中已经被包含过，则不会再次包含。如同此语句名字暗示的那样，只会包含一次。include_once 可以用于在脚本执行期间同一个文件有可能被包含超过一次的情况下，想确保它只被包含一次以避免函数重定义，变量重新赋值等问题。//

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store</title>

    <?php include "parts/meta.php" ?>
</head>

<body>

    <?php include "parts/navbar.php" ?>
    <!-- 将navbar的code单独放在一个navbar.php文件中，然后引入每个page，则只需修改源navbar.php文件，就可以自动修改每个page的导航栏 -->

    <div class="view-window" style="background-image:url(img/products/background001.jpg);">
        <div class="slogan">
           <h2>Explore Hui Culture</h2>
           <h2>Start Your Minimalism Life Here </h2>
        </div>
    </div>


  <!--   <div class="container">
        <div class="card soft">
            <h2>Welcome to the Store</h2>
        </div>
    </div>
 -->
    <div class="container">
        <div class="card">
            <h2 style="text-align:center;">Welcome to our store</h2>
            <strong>We are design studio focused on household products and traditional culture.
                Here you can find cultural and creative products.
                We are glad to communicate Chinese culture with you.</strong>      
        </div>  



        <div class="card flat display-flex">
            <div class="grid gap">
                <div class="col-xs-12 col-md-8 card display-flex flex-align-center">
                    <div class="flex-stretch">  
                         <img src="img/products/hui.jpg" alt="" style="width:100%">
                    </div> 
                </div>


                <div class="col-xs-12 col-md-4 card display-flex flex-align-center">
                    <div>
                        <h3>HUI</h3>
                        <p>Simple lines</p>
                        <p>Harmony with nature</p>
                        <p>Appreciate the impression of Huizhou</p>
                        <div class="form-control">
                            <a href="product_list.php" class="btn sell inline">Shop Now</a>
                        </div>
                    </div>  
                </div>
            </div>   
        </div>

        <div class="card flat display-flex">
            <div class="grid gap">
                <div class="col-xs-12 col-md-4 card display-flex flex-align-center">
                    <div>
                        <h3>Gray</h3>
                        <p>A quiet high mountain stream painting.</p>
                        <div class="form-control">
                            <a href="product_list.php" class="btn sell inline">Shop Now</a>
                        </div>
                    </div>  
                </div>
                <div class="col-xs-12 col-md-8 card display-flex flex-align-center">
                    <div class="flex-stretch">  
                         <img src="img/products/gray.jpg" alt="" style="width:100%">
                    </div> 
                </div>
            </div>   
        </div>

        <div class="card flat display-flex">
            <div class="grid gap">
                <div class="col-xs-12 col-md-8 card display-flex flex-align-center">
                    <div class="flex-stretch">  
                         <img src="img/products/angle.jpg" alt="" style="width:100%">
                    </div> 
                </div>

                <div class="col-xs-12 col-md-4 card display-flex flex-align-center">
                    <div>
                        <h3>Angle</h3>
                        <p>Huizhou Prints Art</p>
                        <p>Meeting<p>
                        <p>Accompaniment</p>
                        <p>Warmth</p>
                        <div class="form-control">
                            <a href="product_list.php" class="btn sell inline">Shop Now</a>
                        </div>
                    </div>  
                </div>
            </div>   
        </div>
    </div>

    
    <div class="container card">
      <h2>New Arrivals</h2>
      <?php recommendNew(); ?>
    </div>



    <?php include "parts/footer.php" ?>   
</body>
</html>

