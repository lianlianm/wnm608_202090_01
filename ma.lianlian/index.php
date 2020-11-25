<?php

include_once "lib/php/functions.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Store</title>

    <?php include "parts/meta.php" ?>
</head>

<body>

    <?php include "parts/navbar.php" ?>
    <!-- 将navbar的code单独放在一个navbar.php文件中，然后引入每个page，则只需修改源navbar.php文件，就可以自动修改每个page的导航栏 -->

    <div class="view-window" style="background-image:url(img/xiaomi002.jpg)">
        <h2>Product Name</h2>
    </div>


    <div class="container">
        <div class="card soft">
            <h2>Welcome to the Store</h2>
        </div>
    </div>

    
</body>
</html>

