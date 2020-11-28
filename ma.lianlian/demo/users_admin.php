<?php

include "../lib/php/functions.php"; 

$filename = "users.json";
$users = file_get_json($filename);

// print_p([$_GET,$_POST]); 
// 这是为了在浏览器中显示get和post的代码内容


$empty_user = (object)[
"name"=>"",
"type"=>"",
"email"=>"",
"classes"=>[]
];


switch(@$_GET['crud']){
	case 'update':
	    $users[$_GET['id']]->name = $_POST['user-name'];
	    $users[$_GET['id']]->type = $_POST['user-type'];
	    $users[$_GET['id']]->email = $_POST['user-email'];
	    $users[$_GET['id']]->classes = explode(", ",$_POST['user-classes']);
    
	    file_put_contents($filename,json_encode($users));
    
	    header("location:{$_SERVER['PHP_SELF']}?id={$_GET['id']}");
	    break;


	case 'create':
	    $empty_user->name = $_POST['user-name']; 
	    $empty_user->type = $_POST['user-type']; 
	    $empty_user->email = $_POST['user-email']; 
	    $empty_user->classes = explode(", ",$_POST['user-classes']);
    
	    $id = count($users);
    
	    $users[] = $empty_user;
    
	    file_put_contents($filename,json_encode($users));
    
	    header("location:{$_SERVER['PHP_SELF']}?id=$id");
	    break;


	case 'delete':
	    array_splice($users,$_GET['id'],1);

	    file_put_contents($filename,json_encode($users));

	    header("location:{$_SERVER['PHP_SELF']}");
	    break;
}


function showUserPage ($user) {

$id = $_GET['id'];
$classes = implode(", ", $user->classes);
$addoredit = $id=='new' ? 'And' : 'Edit';
$createorupdate = $id=='new' ? 'create' : 'update';


$userdata = $id=='new' ? '' : <<<HTML
<div class="card soft">
    <div class="display-flex">
        <h2 class="flex-stretch">$user->name</h2>
        <div>
            <a href="{$_SERVER['PHP_SELF']}?id=$id&crud=delete">
                <img src="img/icons/trash.svg" class="icon">
            </a>           
        </div>
    <div>
		<strong>Type</strong>
		<span>$user->type</span>
	</div>
	<div>
		<strong>Email</strong>
		<span>$user->email</span>
	</div>
	<div>
		<strong>Classes</strong>
		<span>$classes</span>
	</div>
</div>
HTML;


echo <<<HTML
<div class="card soft">
<nav class="nav crumbs">
	<ul>
	    <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
	</ul>
</nav>
</div>
<div class="grid gap">
    <div class="col-xs-12 col-md-4">$userdata</div>
    <div class="col-xs-12 col-md-8">
        <div class="card soft">
           <form method="post" action="{$_SERVER['PHP_SELF']}?id=$id&crud=$createorupdate">
                <h2>$addoredit User</h2>
                <div class="form-control">
                    <label for="user-name" class="form-label">Name</label>
                    <input id="user-name" name="user-name" type="text" placeholder="Type user name" class="form-input" value="$user->name">
                </div>
                <div class="form-control">
                    <label for="user-type" class="form-label">Type</label>
                    <input id="user-type" name="user-type" type="text" placeholder="Type user type" class="form-input" value="$user->type">
                </div>
                <div class="form-control">
                    <label for="user-email" class="form-label">Email</label>
                    <input id="user-email" name="user-email" type="text" placeholder="Type user email" class="form-input" value="$user->email">
                </div>
                <div class="form-control">
                    <label for="user-classes" class="form-label">Classes</label>
                    <input id="user-classes" name="user-classes" type="text" placeholder="Type user classes" class="form-input" value="classes">
                </div>
                <div class="form-control">
                    <input type="submit" class="form-button" value="Save">
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
	<title>User Administrator</title>

	<?php include "../parts/meta.php"; ?>
</head>
<body>
	
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>Users Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
			<nav class="nav flex-none">
				<ul>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
					<li><a href="<?= $_SERVER['PHP_SELF'] ?>?id=new">Add New User</a></li>
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
			showUserPage(
				$_GET['id']=='new' ?
				    $empty_user :
				    $users[$_GET['id']]
				    );
		} else {

		?>
		<div class="card soft">
		<h2>User List</h2>

		<ul>
		<?php

		for($i=0; $i<count($users); $i++) {
			echo "<li>
			<a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
			</li>";
		}
		
		?>
		</ul>
		</div>
		
		<?php } ?>
	</div>

</body>
</html>