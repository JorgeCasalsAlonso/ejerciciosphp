<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Registro </h1>
        <?php
        require_once 'app.php';
        if (count($_POST) != 0) {
            $app = new App($_POST);
            require_once 'usuario.php';
            $datos = $app->__getUsuario()->__getNombre() . "-" . $app->__getUsuario()->__getTelefono();
            $array = explode(";", $_POST["lista"]);
            $array[count($array)] = $datos;
            $resultado = implode(";", $array);
        }
        ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            <label>Nombre de usuario</label><input type="text" value="" name="nombre" /> <br/>
            <label>N&uacute;mero de tel&eacute;fono</label><input type="text" value="" name="telefono" /> <br/>
            <input type="submit" value="Enviar">    
            <input type="hidden" name="lista" value="<?php echo $resultado;?>"/>
        </form>
    </body>
</html>