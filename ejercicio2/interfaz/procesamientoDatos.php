<?php
include __DIR__.'/../clasesFiguras/figura.php';
include __DIR__.'/../clasesFiguras/circulo.php';
include __DIR__.'/../clasesFiguras/cuadrado.php';
include __DIR__.'/../clasesFiguras/rectangulo.php';
include __DIR__.'/../clasesFiguras/triangulo.php';



if(isset($_POST['areaCirculo'])){
    $radio = floatval($_POST['radio']);
    $circulo = new Circulo($radio);
    $area = $circulo->calcularArea();
    echo 'El área del circulo es: '.$area;

}else if(isset($_POST['areaCuadrado'])){
    $lado = floatval($_POST['lado']);
    $cuadrado = new Cuadrado($lado);
    $area = $cuadrado->calcularArea();
    echo 'El área del cuadrado es: '.$area;

}else if(isset($_POST['areaRectangulo'])){
    $baseR = floatval($_POST['baseR']);
    $alturaR = floatval($_POST['alturaR']);
    $rectangulo = new Rectangulo($baseR, $alturaR);
    $area = $rectangulo->calcularArea();
    echo 'El área del rectángulo es: '.$area;

}else if(isset($_POST['areaTriangulo'])){
    $baseT = floatval($_POST['baseT']);
    $alturaT = floatval($_POST['alturaT']);
    $triangulo = new Triangulo($baseT, $alturaT);
    $area = $triangulo->calcularArea();
    echo 'El área del triángulo es: '.$area;

}
?>