<?php

namespace App\figuras;

class Circulo {
    private $radio;
    private $area;
    private $pi = 3.14;


    function __construct(){

    }
    function get($prop){
        return $this->$prop;
    }
    function set($prop, $value){
        $this->$prop = $value;
    }
    
}



?>