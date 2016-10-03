<html>
	<head>
		<title>Ejercicio 04</title>
	</head>
	<body>
		<?php
			function mayor($array){
				for ($i = 0; $i<count($array); $i++)
					if ($i == 0)
						$mayor = $array[$i];
					else
						if ($array[$i] > $mayor){
							$mayor = $array[$i];
						}
				return $mayor;
			}

			function menor($array){
				for ($i = 0; $i<count($array); $i++)
					if ($i == 0)
						$menor = $array[$i];
					else
						if ($array[$i] < $menor){
							$menor = $array[$i];
						}
				return $menor;
			}

			$array = array(17, -5, 4, 0, 68);
			echo "<pre>";
			print_r($array);
			echo "</pre>"; 
			echo "<p>El mayor n&uacute;mero del array es: " . mayor($array) . ".</p>";
			echo "<p>El menor n&uacute;mero del array es: " . menor($array) . ".</p>";
		?>
	</body>
</html>