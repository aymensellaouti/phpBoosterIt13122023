
<?php 

$name = "Sellaouti";
$firstname = "Aymen";
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
	</div>
</body>
</html>