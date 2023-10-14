<?php 
class Rectangulo extends Figura{
    private $altura;
    private $base;

    public function __construct($baseR, $alturaR){
        $this->base=$baseR;
        $this->altura=$alturaR;
    }
    public function calcularArea(){
        return $this->base;
    }
}
?>