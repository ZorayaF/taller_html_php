<?php
class Docente{
    private $codigo;
    private $nombre;
    private $ocupacion;

    function __construct($codigo, $nombre, $ocupacion){
        $this->$codigo = $codigo;
        $this->$nombre = $nombre;
        $this->$ocupacion = $ocupacion;
    }

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>