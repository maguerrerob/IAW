<?php 

	$nombre = $_POST[Nombre];

	$asunto = $_POST[Asunto];

	$mensaje = $_POST[Mensaje];

	echo "<h2>Información recibida del formulario</h2>";

	echo "El nombre recibido es: $nombre" . "</br>";

	echo "El asunto recibido es: $asunto" . "</br>";

	echo "El mensaje recibido es: $mensaje" . "</br>";

?>