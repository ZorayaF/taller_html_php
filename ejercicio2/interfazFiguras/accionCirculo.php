<?php
include __DIR__ . '/../figuras/circulo.php';
include __DIR__ . '/../figurasAccion/areaCirculo.php';

use App\figuras\Circulo;
use App\figurasAccion\areaCirculo;

$operacion = $_POST['operacion'];
$resultado = '';
$circulo = new Circulo();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
    echo $resultado;
    ?>
    
</body>
</html>