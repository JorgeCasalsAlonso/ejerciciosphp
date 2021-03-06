<?php
class App
{
    private $_usuario;

    public function __construct($datos = array())
    {
        require 'Usuario.php';
        $this->_usuario = new Usuario($datos["nombre"], $datos["telefono"]);
    }

    public function __getUsuario()
    {
        return $this->_usuario;
    }

    public function __printUsuario()
    {
        echo "<ul><li>Nombre: " . $this->_usuario->__getNombre() . "</li><li>Tel&eacute;fono: " . $this->_usuario->__getTelefono() . "</li></ul>";
    }
}
