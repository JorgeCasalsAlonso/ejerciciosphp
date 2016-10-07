<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <!--<h1>Registro </h1>
        <form method="post" action="<?php /*echo $_SERVER['PHP_SELF']*/;?>"> 
            <label>Nombre de usuario</label><input type="text" value="" name="nombre" /> <br/>
            <label>N&uacute;mero de tel&eacute;fono</label><input type="text" value="" name="telefono" /> <br/>
            <input type="submit" value="Enviar"> 
        </form>-->
        <?php
        if (count($_POST) != 0) {
            $campos = array("nombre", "telefono");
            echo "<h1>Datos recibidos</h1><ul> ";
            for ($i = 0; $i < count($campos); $i++) {
                echo "<li>" . $campos[$i] . ": " . $_POST[$campos[$i]] . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<h1>Registro </h1><form method=\"post\" action=\" ". $_SERVER['PHP_SELF'] . "\"><label>Nombre de usuario</label><input type=\"text\" value=\"\" name=\"nombre\" /> <br/><label>N&uacute;mero de tel&eacute;fono</label><input type=\"text\" value=\"\" name=\"telefono\" /> <br/><input type=\"submit\" value=\"Enviar\"></form>";
        }
        ?>
    </body>
</html>