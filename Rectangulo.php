<?php
class Rectangulo
{
    private $_base;
    private $_altura;

    public function __construct($base, $altura)
    {
        $this->_base = $base;
        $this->_altura = $altura;
    }

    public function __perimetro()
    {
        return $this->_base*2 + $this->_altura*2;
    }

    public function __superficie()
    {
        return $this->_base * $this->_altura;
    }

    public function __getBase()
    {
        return $this->_base;
    }

    public function __getAltura()
    {
        return $this->_altura;
    }

    public function __setBase($base)
    {
        $this->_base = $base;
    }

    public function __setAltura()
    {
        $this->_altura = $altura;
    }

    public function __toString()
    {
        return "Rectángulo de " . $this->_altura . " x " . $this->_base . ".";
    }
}
