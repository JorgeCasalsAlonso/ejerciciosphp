<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Registro </h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            <label>Nombre de usuario</label><input type="text" value="" name="nombre" /> <br/>
            <label>N&uacute;mero de tel&eacute;fono</label><input type="text" value="" name="telefono" /> <br/>
            <input type="submit" value="Enviar">    
        <?php
        require_once 'app.php';
        if (count($_POST) != 0) {
            $app = new App($_POST);
            require_once 'usuario.php';
            $datos = $app-> __getUsuario()->__getNombre() . "-" . $app->__getUsuario()->__getTelefono();
            if (!empty($_POST["lista"])) {
                $array = explode(";", $_POST["lista"]);
            }
            if (empty($array)) {
                $array[0] = $datos;
            } else {
                $array[count($array)] = $datos;

            }
            echo "<h2>Datos hasta ahora: </h2>";
            foreach ($array as $cadena) {
                echo "<p>Nombre: " . substr($cadena, 0, strrpos($string, "-")+1) . "<br />Tel&eacute;fono: " . substr($cadena, strrpos($string, "-")-1) . "</p>";
            }
            $resultado = implode(";", $array);
        }
        ?>
            <input type="hidden" name="lista" value="<?php echo $resultado;?>"/>
        </form>
    </body>
</html>