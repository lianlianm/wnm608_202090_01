<?php

include "../lib/php/functions.php";

$notes_object = file_get_json("json_notes.json");
$users_array = file_get_json("users.json");

// print_p($notes_object);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes</title>

	<?php include "../parts/meta.php"; ?>

</head>
<body>

	<header class="navbar">
		<div class="container">
			<h1>Notes</h1>
		</div>
	</header>

	<div class="container">
		<div class="card soft">
			<h2>JSON Notes</h2>

			<ul>
			<?php

			// instantiation comparison iteration 比较迭代
			// for 循环是 PHP 中最复杂的循环结构。
			// for 循环的语法是：for (expr1; expr2; expr3) {echo....}
			// 第一个表达式（expr1）在循环开始前无条件求值（并执行）一次。expr2 在每次循环开始前求值。如果值为 TRUE，则继续循环，执行嵌套的循环语句。如果值为 FALSE，则终止循环。expr3 在每次循环之后被求值（并执行）。
			// 
			//++是自增运算符，i++是在每次使用完i 后自动+1，i=i+1
			//
			// ->是从属关系，A->B 意思是A's B, A中的B
			
			for($i=0; $i<count($notes_object->notes); $i++){
				echo "<li>".
				$notes_object->notes[$i].
				"</li>\n";
			}

			?>
		    </ul>
		</div>


		<div class="card soft">
			<h2>Users</h2>

			<ul>
			<?php

			// instantiation comparison iteration
			for($i=0; $i<count($users_array); $i++){
				echo "<li>
				<strong>{$users_array[$i]->name}</strong>
				<span>{$users_array[$i]->type}</span>
				</li>\n";
			}

			?>
		    </ul>
		    
		</div>
	</div>

</body>
</html>