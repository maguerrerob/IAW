<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php 

		$x = 1;

		$sum = 0;

		while ($x <= 50) {
			
			$y = $x * $x;

			echo $y;

			echo "<br>";

			$sum = $sum + $y;

			$x++;

		}

		echo "La suma total es: $sum";

	?>

</body>
</html>