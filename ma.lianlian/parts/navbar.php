<header class="navbar">
    <div class="container grid display-flex flex-align-center">
        <div class="col-xs-12 col-md-3" style="margin:auto">
           <!--  <img src="img/logo001.png" class="logo"> -->
           <h1><a href="index.php">HUI.徽</a></h1>
        </div>
        <div class="col-xs-12 col-md-3">
            <!-- <ul> 
                <li><a href="#">Account</a></li>
            </ul> -->
        </div>

        <nav class="nav pills col-xs-12 col-md-6">
            <ul> 
                <li><a href="index.php" class="heading-bold">Home</a></li>
                <li><a href="about.php" class="heading-bold">About</a></li>
                <li><a href="product_list.php" class="heading-bold">Products</a></li>
                <li><a href="product_cart.php" class="heading-bold">
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