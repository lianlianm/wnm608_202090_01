<?php

include "../lib/php/functions.php"; 
include "../parts/templates.php"; 
include "../data/api.php"; 

setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');
$products = makeStatement("products_admin_all",[]);
 
$empty_product = (object)[
"title"=>"Horse Head Wall Pen Holder",
"price"=>"12.99",
"category"=>"Hui",
"description"=>"Based on the typical structural contours and materials of Huizhou architecture, a series of household products including flower pots, lamps, and pen holders are designed. Use simple lines to depict the outline of the building to create a simple and harmonious mood. The off-white tone of the products can be harmoniously matched with different environments and has a good decorative effect.",
"material"=>"Cement, Iron Wire, Wood",
"quantity"=>"20",
"image_other"=>"hui_penholder_1.jpg,hui_penholder_2.jpg",
//注意此处多个图片文件名之间有无space，必须跟line78一致， 此处我的是无space
"image_main"=>"hui_penholder_main.jpg"
];


switch(@$_GET['crud']){
	case 'update':

	    makeStatement("product_update",[
	    	$_POST['product-title'],
	    	$_POST['product-price'],
	    	$_POST['product-category'],
	    	$_POST['product-description'],
	    	$_POST['product-material'],
	    	$_POST['product-quantity'],
	    	$_POST['product-image_other'],
	    	$_POST['product-image_main'],
	    	$_GET['id'],
	    ]);
	      
    
	    header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	    break;


	case 'create':

        $id = makeStatement("product_insert",[
            $_POST['product-title'],
	    	$_POST['product-price'],
	    	$_POST['product-category'],
	    	$_POST['product-description'],
	    	$_POST['product-material'],
	    	$_POST['product-quantity'],
	    	$_POST['product-image_other'],
	    	$_POST['product-image_main']
        ]);
    
	    header("location:{$_SERVER['PHP_SELF']}?id=$id");
	    break;


	case 'delete':
	    makeStatement("product_delete",[
	    	$_GET['id']
	    ]);

	    header("location:{$_SERVER['PHP_SELF']}");
	    break;
}



// 这就是admin页面中edit的页面
function showProductPage($product) {

	//print_p($product);

$id = $_GET['id'];

$thumbs = explode(",", $product->image_other);
//此处呼应line19 多个文件名之间是否有space，必须一致，此处我写的是无space


$thumbs_elements = array_reduce($thumbs,function($r,$o){
	return $r."<img src='img/products/$o'>";
});


$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';


$productdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
    <div class="display-flex">
        <h2 class="flex-stretch">$product->title</h2>
        <div>
            <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
                <img src="img/icons/trash.svg" class="icon">
            </a>           
        </div>
    </div>
    <div>
		<strong>Category</strong>
		<span>$product->category</span>
	</div>
	<div>
		<strong>Price</strong>
		<span>&dollar;$product->price</span>
	</div>
	<div>
		<strong>Quantity</strong>
		<span>$product->quantity</span>
	</div>
	<div>
		<strong>Description</strong>
		<span>$product->description</span>
	</div>
	<div>
		<strong>Material</strong>
		<span>$product->material</span>
	</div>
	<div>
		<strong>Images</strong>
		<div class="image-thumbs"><img src='img/products/$product->image_main'></div>
		<div class="image-thumbs">$thumbs_elements</div>
	</div>
</div>
HTML;



echo <<<HTML
<div class="card">
<nav class="nav crumbs">
	<ul>
	    <li><a href="{$_SERVER['PHP_SELF']}"> < Back</a></li>
	</ul>
</nav>
</div>
<div class="grid gap">
    <div class="col-xs-12 col-md-4">$productdata</div>
    <div class="col-xs-12 col-md-8">
        <div class="card soft">
           <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
                <h2>$addoredit Product</h2>
                <div class="form-control">
                    <label for="product-title" class="form-label">Title</label>
                    <input id="product-title" name="product-title" type="text" placeholder="Type product title" class="form-input" value="$product->title">
                </div>
                <div class="form-control">
                    <label for="product-category" class="form-label">Category</label>
                    <input id="product-category" name="product-category" type="text" placeholder="Type product category" class="form-input" value="$product->category">
                </div>
                <div class="form-control">
                    <label for="product-price" class="form-label">Price</label>
                    <input id="product-price" name="product-price" type="text" placeholder="Type product price" class="form-input" value="$product->price">
                </div>
                <div class="form-control">
                    <label for="product-quantity" class="form-label">Quantity</label>
                    <input id="product-quantity" name="product-quantity" type="text" placeholder="Type product quantity" class="form-input" value="$product->quantity">
                </div>
                <div class="form-control">
                    <label for="product-description" class="form-label">Description</label>
                    <input id="product-description" name="product-description" type="text" placeholder="Type product description" class="form-input" value="$product->description">
                </div>
                <div class="form-control">
                    <label for="product-material" class="form-label">Material</label>
                    <input id="product-material" name="product-material" type="text" placeholder="Type product material" class="form-input" value="$product->material">
                </div>
                <div class="form-control">
                    <label for="product-image_main" class="form-label">Image Main</label>
                    <input id="product-image_main" name="product-image_main" type="text" placeholder="Type product image_main" class="form-input" value="$product->image_main">
                </div>
                <div class="form-control">
                    <label for="product-image_other" class="form-label">Image Others</label>
                    <input id="product-image_other" name="product-image_other" type="text" placeholder="Type product image_other" class="form-input" value="$product->image_other">
                </div>
                <div class="form-control">
                    <input type="submit" class="btn sell" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
HTML;
}





?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Administrator</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>

	<header class="navbar">
        <div class="container grid display-flex flex-align-center">
            <div class="col-xs-12 col-md-3" style="margin:auto">
                <h2>Products Admin</h2>
            </div>
    
            <div class="col-xs-12 col-md-3">
            </div>
    
            <nav class="nav pills col-xs-12 col-md-6" style="margin:auto">
                <ul> 
                    <li><a href="product_list.php">Shop</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
                    <li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New Product</a></li>
                </ul>
            </nav>
        </div>
    </header> 
	
	


	<div class="container">

		<?php

        // ternary or conditional三元或条件
        // 三元运算符：简写是：(条件) ? (值1):(值2); 代码翻译就是下面的这串if else
        // 解释：如果条件成立（为真），则执行冒号前边的“值1”，否则执行冒号后面的“值2”
        // isset（）函数是检测变量是否设置，$_GET['id']是通过get方法传过来的值
        
		if(isset($_GET['id'])) {
			showProductPage(
				$_GET['id']=='new' ?
				    $empty_product :
				    array_find($products,function($o){
				    	return $o->id==$_GET['id'];
				    })
			);

		} else {

		?>
		
		<h2>Product List</h2>
		<div class="card">

		    <div>
    
		    <?php
    
		    echo array_reduce($products,'makeAdminList');
    
		    ?>
		    </div>
	    </div>
		
		<?php } ?>
	</div>

</body>
</html>