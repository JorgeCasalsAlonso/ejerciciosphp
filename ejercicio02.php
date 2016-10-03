<html>
	<head>
		<title>Ejercicio 02</title>
	</head>
	<body>
		<?php
			$equipo = array();
			$equipo["base"] = "Pepe";
			$equipo["pivot"] = "Juan";
			$equipo["escolta"] = "Miguel";
			$equipo["alero"] = "Alberto";
			$equipo["alapivot"] = "Pedro";
			foreach ($equipo as $position=>$element){
				echo "<p>" . $position . ": " . $element . "</p>";
			}
		?>
	</body>
</html>