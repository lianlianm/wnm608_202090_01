
<header class="navbar">
    <div class="container grid display-flex flex-align-center">
        <div class="col-xs-4 col-md-3" style="margin:auto">
            <a href="index.php"><img src="img/logo001.png" class="logo"></a>
        </div>

        <div class="col-xs-0 col-md-3">
        </div>

        <nav class="nav pills col-xs-8 col-md-6" style="margin:auto">
            <ul> 
                <li><a href="index.php">Home</a></li>
                <li><a href="product_list.php">Shop</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="product_cart.php">
                        <span>Cart</span>
                        <span class="badge"><?= makeCartBadge() ?></span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header> 

<!-- 将原来html中的导航栏code单独放在一个PHP文件中，作为导航栏的源文件 -->
<!-- 而且这个文件is not a completed file, 他还是完整文件的一部分 -->



