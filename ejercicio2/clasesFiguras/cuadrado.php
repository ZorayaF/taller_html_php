<?php 
class Cuadrado extends Figura{
    private $lado;

    public function __construct($lado){
        $this->lado=$lado;
    }
    
    public function calcularArea(){
        return pow($this->lado, 2);
    }
}
?>