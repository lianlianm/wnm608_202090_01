<?php

include "../lib/php/functions.php"; 

$users = file_get_json("users.json");




function showUserPage ($user) {
$classes = implode(", ", $user->classes);

echo <<<HTML
<nav class="nav crumbs">
	<ul>
	    <li><a href="{$_SERVER['PHP_SELF']}">Back</a></li>
	</ul>
</nav>
<div>
	<h2>$user->name</h2>
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

	<form class="form-control user-form" action="users_admin.php" method="post" >
        <label  class="heading-bold">Update User Information:</label>

        <input type="text" placeholder="User Name" class="form-input"><br>

        <div class="form-select">
        <select style="background-color:transparent; border:1px solid var(--color-neutral-medium);">
            <option value="" selected="">Please Select User Type</option>
            <option value="teacher">Teacher</option>
            <option value="single">Singe</option>
            <option value="actor">Actor</option>
            <option value="chef">Chef</option>
            <option value="who Knows">Who Knows</option>
        </select>
        </div>
   
        <input type="email" placeholder="User Email" class="form-input"><br>
        <input type="text" placeholder="User Classes" class="form-input"><br>

        <div class="form-control">
            <button class="btn color-option inline">Submit</button>
        </div>

	</form>

	



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
				</ul>
			</nav>
		</div>
	</header>


	<div class="container">
		<div class="card soft">

			<?php

			if(isset($_GET['id'])) {

				showUserPage($users[$_GET['id']]);

			} else {

			?>

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

		    
		    <?php } ?>
		</div>
	</div>

</body>
</html>