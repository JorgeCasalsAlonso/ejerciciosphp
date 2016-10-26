<html>
    <head>
        <title>Formulario</title>
    </head>
    <body>
        <h1>Registro </h1>
        <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> 
            <label>Nombre </label><input type="text" value="" name="nombre" /> <br/>
            <label>Apellidos </label><input type="text" value="" name="apellidos" /> <br/>
            <label>Fecha de nacimiento </label><input type="date" name="fechanacimiento" /> <br/>
            <label>Sexo </label><select id="sexo" name="sexo">
              <option value="Hombre">Hombre</option>
              <option value="Mujer">Mujer</option>
            </select> <br/>
            <label>Foto de perfil </label><input name="foto" type="file" /> <br/>
            <input type="submit" value="Enviar">    
        <?php
        if (count($_POST) != 0) {
            echo "<h1>Datos recibidos:</h1>";
            echo "<p>Nombre completo: <b>" . $_POST["nombre"] . " " . $_POST["apellidos"] . "</b></p>";
            echo "<p>Fecha de nacimiento: <b>" . $_POST["fechanacimiento"] . "</b></p>";
            echo "<p>Sexo: <b>" . $_POST["sexo"] . "</b></p>";
            if (count($_FILES) != 0) {
                $file_name = $_FILES['foto']['name'];
                $add="Uploads/$file_name";
                if (move_uploaded_file($_FILES['foto']['tmp_name'], $add)) {
                    echo "<img src=\"" . $add . "\" />";
                } else {
                    echo "Error al subir el archivo";
                }
            }
        }
        ?>
        </form>
    </body>
</html>