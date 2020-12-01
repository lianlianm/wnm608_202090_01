
<!-- search, sort, filter功能的创建 --> 


<!-- search -->
<?php 

@include_once "../lib/php/functions.php";

function getRequires($props) {
	foreach($props as $prop) {
		if(!isset($_GET[$prop])) return false;
	}
	return true;
}

function makeStatement($type) {

	switch ($type) {
		case "products_all":
		    return MYSQLIQuery("SELECT * 
		    	FROM 'products' 
		    	ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
		    	LIMIT {$_GET['limit']}");
			break;


        case "product_by_id":
        if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM 'products' 
        		WHERE 'id' = ".$_GET['id']);
            break;


        case "products_by_category":
        if(!getRequires(['category'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("
                SELECT * 
        		FROM 'products' 
        		WHERE 'category' = '{$_GET['category']}'
        	    LIMIT {$_GET['limit']}");
            break;


        case "price_above":
        if(!getRequires(['price'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM 'products' 
        		WHERE 'price' > '{$_GET['price']}'
        		ORDER BY 'price' DESC
        	    LIMIT {$_GET['limit']}");
            break;

        case "price_below":
        if(!getRequires(['price'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM 'products' 
        		WHERE 'price' < '{$_GET['price']}'
        	    ORDER BY 'price' ASC
        	    LIMIT {$_GET['limit']}");
            break;

        case "search":
        if(!getRequires(['s'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM 'products' 
        		WHERE 'title' LIKE '%{$_GET['s']}%'
        	    ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
        	    LIMIT {$_GET['limit']}");
            break;
            // like意思是模糊查询，比如输入appl就可以检索出apple这个物品




		default: return ["error"=>"No Matched Type"];
	}
}


// print_p(makeStatement('product_all'));

// if(isset($_GET['t'])) {
// 	echo json_encode(
// 		makeStatement($_GET['t']),
// 		JSON_UNESCAPED_UNICODE /
// 		JSON_NUMBER_CHECK
// 	);
// }


 ?>