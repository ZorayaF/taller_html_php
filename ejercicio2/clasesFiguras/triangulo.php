<?php 
class Triangulo extends Figura{
    private $altura;
    private $base;

    public function __construct($baseT, $alturaT){
        $this->base=$baseT;
        $this->altura=$alturaT;
    }
    
    public function calcularArea(){
        return $this->base;
    }
}
?>