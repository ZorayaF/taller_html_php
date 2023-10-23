<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    body {
            background-image: url('tu_imagen_de_fondo.jpg'); 
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #44878f;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        form {
            background-color: #8caaa2;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        label {
            display: block;
            margin: 10px 0;
            color: #5a9b95;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #5a9b95;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #efaaa3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #ff8591;
        }
        h2 {
            background-color: #44878f;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 20px;
            text-align: center;
        }
        button{
            background-color: #efaaa3;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        } 
        </style>
    
</head>
<body>
    
</body>
</html>
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
    echo '<h2>El área del circulo es:</h2> '.$area;


}else if(isset($_POST['areaCuadrado'])){
    $lado = floatval($_POST['lado']);
    $cuadrado = new Cuadrado($lado);
    $area = $cuadrado->calcularArea();
    echo '<h2>El área del cuadrado es:</h2> '.$area;

}else if(isset($_POST['areaRectangulo'])){
    $baseR = floatval($_POST['baseR']);
    $alturaR = floatval($_POST['alturaR']);
    $rectangulo = new Rectangulo($baseR, $alturaR);
    $area = $rectangulo->calcularArea();
    echo '<h2>El área del rectángulo es:</h2> '.$area;

}else if(isset($_POST['areaTriangulo'])){
    $baseT = floatval($_POST['baseT']);
    $alturaT = floatval($_POST['alturaT']);
    $triangulo = new Triangulo($baseT, $alturaT);
    $area = $triangulo->calcularArea();
    echo '<h2>El área del triángulo es:</h2> '.$area;

}
?>