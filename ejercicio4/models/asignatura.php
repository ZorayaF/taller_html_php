<?php

namespace App\models;

class Asignatura{
    private $codigo;
    private $nombre;
    private $docente;

    function __construct($codigo, $nombre, $docente){
        $this->$codigo = $codigo;
        $this->$nombre = $nombre;
        $this->$docente = $docente;
    }

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>