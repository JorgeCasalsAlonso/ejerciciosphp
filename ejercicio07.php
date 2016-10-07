<html>
    <body>
        <?php
        require_once 'Rectangulo.php';

        $rectangulo = new Rectangulo(20, 12);

        echo $rectangulo . "<br/>";
        echo "Su superficie es " . $rectangulo->__superficie() . ".</br>";
        echo "Su per&iacute;metro es " . $rectangulo->__perimetro() . ".</br>";
        echo $rectangulo->__toString();
        ?>
    </body>
</body>
