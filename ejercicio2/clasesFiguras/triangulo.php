<?php 
class Triangulo extends Figura{
    private $altura;
    private $base;

    public function __construct($base, $altura){
        $this->base=$base;
        $this->altura=$altura;
    }
    
    public function calcularArea(){
        return $this->base*$this->altura;;
    }
}
?>