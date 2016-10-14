<?php
class Usuario
{
    private $_nombre;
    private $_telefono;

    public function __construct($nombre, $telefono)
    {
        $this->_nombre = $nombre;
        $this->_telefono = $telefono;
    }

    public function __getNombre()
    {
        return $this->_nombre;
    }

    public function __getTelefono()
    {
        return $this->_telefono;
    }

    public function __setNombre($nombre)
    {
        $this->_nombre = $nombre;
    }

    public function __setTelefono($telefono)
    {
        $this->_telefono = $telefono;
    }
}
