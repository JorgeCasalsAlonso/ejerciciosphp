<html>
	<head>
		<title>Ejercicio 05</title>
	</head>
	<body>
		<?php
			function ordenar(&$array){
				for ($i = 0; $i<count($array); $i++){
					for ($j = 0; $i < count($array)-1; $j++){
						if ($array[$j] < $array[$j+1]){
							$auxiliar = $array[$j];
							$array[$j] = $array[$j+1];
							$array[$j+1] = $auxiliar;
						}
					}
				}
			}

			$array = array(17, -5, 4, 0, 68);
			echo "<p>Antes de ordenar:<pre>";
			print_r($array);
			echo "</pre></p>"; 
			echo "<p>Despu&eacute;s de ordenar:<pre>";
			ordenar($array);
			print_r($array);
			echo "</pre></p>"; 
		?>
	</body>
</html>