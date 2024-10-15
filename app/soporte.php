<?php

abstract class Soporte {
    
    private static $iva = 21; 
    
    public function __construct(
        public $titulo,
        protected $numero,
        private $precio,
    ) {}

    public function getPrecio() {
        return $this->precio;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getPrecioConIva() {
        return $this->precio + (self::$iva * $this->precio);
    }

    public function muestraResumen () { 
        echo "<em>" . $this->titulo . "</em><br />" . $this->getPrecio() . "€ (IVA no incluído).";
    }
}

?>