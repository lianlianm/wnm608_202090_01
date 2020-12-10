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

    <div class="view-window" style="background-image:url(img/background001.jpg) ">
        <div class="slogan heading-bold">
            HUI <br> A CULTURAL AND MINIMALISM HOME 
        </div>
    </div>


    <div class="container">
        <div class="card soft">
            <h2>Welcome to the Store</h2>
        </div>
    </div>

    
    <div class="container">
      <h2>New </h2>
      <?php recommendNew(); ?>
    </div>



    <?php include "parts/footer.php" ?>   
</body>
</html>

