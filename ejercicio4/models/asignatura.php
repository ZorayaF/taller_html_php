<?php

namespace App\models;

class Asignatura{
    private $codigo;
    private $nombre;
    private $docente;

    function get($prop){
        return $this->$prop;
    }

    function set($prop, $value){
        $this->$prop = $value;
    }
}
?>