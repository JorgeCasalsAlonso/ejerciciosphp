<html>
	<head>
		<title>Ejercicio 03</title>
	</head>
	<body>
		<?php
			$array = array(
				"base" => array("Pepe Gutiérrez", "Juan Navarro"),
				"pivot" => array("Pedro González", "David Prieto"),
				"escolta" => array("José Aguirre", "Luis Leciñena"),
				"alero" => array("Alberto Rodríguez", "Rubén Terreu"),
				"alapivot" => array("Francisco Pérez", "Jesús Rodríguez"),
				);
			echo "<ul>";
			foreach ($array as $position=>$elements){
				echo "<li>" . $position . "<ul>";
				foreach ($elements as $jugador){
					echo "<li>" . $jugador . "</li>";
				}
				echo "</ul></li>";
			}
			echo "</ul>";
		?>
	</body>
</html>