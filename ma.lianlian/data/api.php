
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

function makeStatement($type,$params=[]) {

	switch ($type) {
		case "products_all":
		    return MYSQLIQuery("SELECT * 
		    	FROM `products`
		    	ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
		    	LIMIT {$_GET['limit']}");
			break;
//涉及到sql的code，在这里的所有类似 FROM `products`，中的products这样不是value而是名称的字符，都要用反引号``（在tab键上面）， 而不是单引号‘’
//在MySQL中，为了区分MySQL的关键字与普通字符，MySQL引入了一个反引号


        case "products_admin_all":
            return MYSQLIQuery("SELECT * 
                FROM `products`
                ORDER BY date_create DESC");
            break;


        case "product_by_id":
        if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM `products` 
        		WHERE `id` = ".$_GET['id']);
            break;


        case "products_by_category":
        if(!getRequires(['category'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("
                SELECT * 
        		FROM `products` 
        		WHERE `category` = '{$_GET['category']}'
        	    LIMIT {$_GET['limit']}");
            break;


        case "price_above":
        if(!getRequires(['price'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM `products` 
        		WHERE `price` > '{$_GET['price']}'
        		ORDER BY `price` DESC
        	    LIMIT {$_GET['limit']}");
            break;

        case "price_below":
        if(!getRequires(['price'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM `products` 
        		WHERE `price` < '{$_GET['price']}'
        	    ORDER BY `price` ASC
        	    LIMIT {$_GET['limit']}");
            break;

        case "search":
        if(!getRequires(['s'])) return
        ["error"=>"Missing Properties"];

        	return MYSQLIQuery("SELECT * 
        		FROM `products` 
        		WHERE `title` LIKE '%{$_GET['s']}%'
        	    ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
        	    LIMIT {$_GET['limit']}");
            break;
            // like意思是模糊查询，比如输入appl就可以检索出apple这个物品
        

        case "product_insert":
            return MYSQLIQuery("INSERT INTO
                `products`
                (
                    `title`,
                    `price`,
                    `category`,
                    `description`,
                    `material`,
                    `quantity`,
                    `image_other`,
                    `image_main`,
                    `date_create`,
                    `date_modify`
                )
                VALUES
                (
                    '{$params[0]}',
                    '{$params[1]}',
                    '{$params[2]}',
                    '{$params[3]}',
                    '{$params[4]}',
                    '{$params[5]}',
                    '{$params[6]}',
                    '{$params[7]}',
                    NOW(),
                    NOW()
                )

                ");
            break;


        case "product_update":
            return MYSQLIQuery("UPDATE
                `products`
                SET
                    `title` = '{$params[0]}',
                    `price` = '{$params[1]}',
                    `category` = '{$params[2]}',
                    `description` = '{$params[3]}',
                    `description` = '{$params[4]}',
                    `quantity` = '{$params[5]}',
                    `image_other` = '{$params[6]}',
                    `image_main` = '{$params[7]}'
                WHERE `id` = {$params[8]}
                ");
            break;


         case "product_delete":
            return MYSQLIQuery("DELETE FROM
                `products` WHERE `id` = {$params[0]}
                ");
            break;





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