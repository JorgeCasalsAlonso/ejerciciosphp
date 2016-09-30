<html>
	<head>
		<title>Ejercicio 01</title>
	</head>
	<body>
		<?php
			$array = array("Patata", 2, "prueba", 4, "algo");
			for ($i = 0; $i < count($array); $i++){
				echo "<p>" . $array[$i] . "</p>";
			}
		?>
	</body>
</html>