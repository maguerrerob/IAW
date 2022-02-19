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

		while ($x <= 100) {
			if ($x % 2 != 0) {
				
				echo $x;

				echo "<br>";

				$sum = $sum + $x;

			}

			$x++;

		}

		echo "La suma de todos los números impares del 1 al 100 es: $sum";

	 ?>

</body>
</html>