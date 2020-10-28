<?php

$filename = "json_notes_json";
$file = file_get_contents($filename);
$notes_object = json_decode($file);

print_p($notes);

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Notes</title>

	<?php include "../parts/meta.php"; 

	$notes_object = 
	?>
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

			// instantiation comparison iteration
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