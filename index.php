
<?php 
define("MAX_STRING_LENGTH",100);

$name = "Sellaouti";
$firstname = "Aymen";
var_dump(get_defined_constants());
// var_dump($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<p>
			Bonjour <?php echo "$firstname $name" ?>;
		</p>
		<p>
			Bonjour <?php echo '$firstname $name' ?>;
		</p>

		<?php  
			$x = 95;

			if ($x < MAX_STRING_LENGTH) {
				// Todo 
			}


		?>



<?php  
			$x = 200;

			if ($x < MAX_STRING_LENGTH) {
				// Todo 
			}
		?>

	</div>
</body>
</html>