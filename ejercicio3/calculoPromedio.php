<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultados para <?php echo $_POST['materia']; ?></h1>

    <?php
    $materia = $_POST['materia'];
    $cantidad_notas = $_POST['cantidad_notas'];
    $nota_minima = $_POST['nota_minima'];
    $nota_maxima = $_POST['nota_maxima'];
    $notas = "";

    $suma_notas = 0;

    for ($i = 1; $i <= $cantidad_notas; $i++) {
        $nota = $_POST["nota_$i"];
        $suma_notas += $nota;

        $notas .= "Nota $i: $nota<br>"; // Agregar desglose
    }

    $promedio = $suma_notas / $cantidad_notas;
    $nota_minima_aprobar = ($nota_maxima + $nota_minima) / 2 + 0.5;

    echo "Rango de notas: de $nota_minima a $nota_maxima<br>"; 
    echo "Nota mínima para aprobar: $nota_minima_aprobar<br>";
    echo "Notas:<br>$notas"; 
    echo "Promedio: $promedio<br>";

    if ($promedio >= $nota_minima_aprobar) {
        echo "¡Felicidades, ha aprobado la materia!";
    } else {
        echo "Lo siento, no ha aprobado la materia.";
    }
    ?>
    <br>
    <br>
    <div>
        <button onclick="window.history.back()">Regresar</button>
    </div>
</body>
</html>