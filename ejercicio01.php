<html>
    <head>
        <title>Ejercicio 01</title>
    </head>
    <body>
        <?php
        $array1 = array("Pepe", "Juan", "Alberto", "Carlos", "Mariano");
        echo "<table><tr>";
        for ($i = 0; $i < count($array1); $i++) {
            echo "<td>" . $array1[$i] . "</td>";
        }
        echo "</tr></table>";
        $array2[] = "Pepe";
        $array2[] = "Juan";
        $array2[] = "Alberto";
        $array2[] = "Carlos";
        $array2[] = "Mariano";
        echo "<table>";
        foreach ($array1 as $position => $element) {
            echo "<tr><th>" . $position . "</th><td>" . $element . '</td></tr>';
        }
        echo "</table>";
        ?>
    </body>
</html>