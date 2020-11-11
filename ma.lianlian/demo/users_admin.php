<?php

include "../lib/php/functions.php"; 

$filename = "user.json";
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
	    $user[$_GET['id']]->name = $_POST['user_name'];
	    $user[$_GET['id']]->type = $_POST['user_type'];
	    $user[$_GET['id']]->email = $_POST['user_email'];
	    $user[$_GET['id']]->classes = explode(", ",$_POST['user_classes']);
    
	    file_put_contents($filename, json_encode($users));
    
	    header("location:{$_SERVER['PHP_SELF']}?id={$_GET[['id']}");
	    breadk;


	case 'create':
	    $empty_user->name = $_POST['user_name']; 
	    $empty_user->type = $_POST['user_type']; 
	    $empty_user->email = $_POST['user_email']; 
	    $empty_user->classes = explode(", ",$_POST['user_classes']);
    
	    $id = count($users);
    
	    $users[] = $empty_user;
    
	    file_put_contents($filename,json_encode($users));
    
	    header("location:{$_SERVER['PHP_SELF']}?id={$_GET[['id']}");
	    breadk;


	case 'delete':
	    array_splice($users,$_GET['id'],1);

	    file_put_contents($filename,json_encode($users));

	    header("location:{$_SERVER['PHP_SELF']}");
	    breadk;
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
            <a href="{$_SERVER['PHP_SELF']}?id&crud=delete">
                <imag src="img/icons/trash.svg" clsss="icon">
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
                    <label for="user-classes" class="form-label">classes</label>
                    <input id="user-classes" name="user-classes" type="text" placeholder="Type user classes" class="form-input" value="$user->classes">
                </div>
                <div class="form-control">
                    <input type="submit" class="form-buttom" type=value="Save">
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