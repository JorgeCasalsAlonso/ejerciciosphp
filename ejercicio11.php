<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>  
        <?php
        if (count($_POST) == 0) {
            $usuario = $_COOKIE["usuario"];
            echo "<h1>Registro</h1><form method=\"post\" action=\" " . $_SERVER['PHP_SELF'] . "\">";
            echo "<label>Nombre de usuario </label><input type=\"text\" value=\"" . $usuario . "\" name=\"usuario\" /> <br/>";
            echo "<label>Contrase&ntilde;a </label><input type=\"password\" value=\"\" name=\"password\" /> <br/>";
            echo "<input type=\"checkbox\" name=\"recordar\">Recordar<br/>";
            echo "<input type=\"submit\" value=\"Enviar\"></form>";
        } else {
            echo "<p>Nombre de usuario: " . $_POST["usuario"] . ".</p>";
            echo "<p>Contrase&ntilde;a: " . $_POST["password"] . ".</p>";
            if (isset($_POST["recordar"])) {
                setcookie("usuario", $_POST["usuario"], time()+3600);
            }
        }

        ?>
        
    </body>
</html>