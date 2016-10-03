<html>
	<head>
		<title>Ejercicio 06</title>
	</head>
	<body>
		<?php
			$campos = array("titulo", "género", "usuario", "password", "sexo", "generos[]");
			echo "<h3>Datos recibidos:</h3>";
			echo "<p>GET: </p><ul>";
			for ($i = 0; $i < count($campos); $i++){
				echo "<li>" . $campos[$i] . ": " . $_GET[$campos[$i]] . "</li>";
			}
			echo "</ul>";
			echo "<p>POST: </p><ul>";
			for ($i = 0; $i < count($campos); $i++){
				echo "<li>" . $campos[$i] . ": " . $_POST[$campos[$i]] . "</li>";
			}
			echo "</ul>";
			echo "<p>REQUEST: </p><ul>";
			for ($i = 0; $i < count($campos); $i++){
				echo "<li>" . $campos[$i] . ": " . $_REQUEST[$campos[$i]] . "</li>";
			}
			echo "</ul>";
		?>
	</body>
</html>