<!DOCTYPE html>
<html>
<head>
    <title>Ingrese sus notas</title>
</head>
<body>
    

    <?php
        $materia = $_POST['materia'];
        $num_notas = $_POST['num_notas'];
        $nota_minima = $_POST['min_calif'];
        $nota_maxima = $_POST['max_calif'];
        echo '<h1>Ingrese sus notas para: '.$materia .'</h1>';
        echo "<form action='calculoPromedio.php' method='post'>";
        for ($i = 1; $i <= $num_notas; $i++) {
            echo "<label for='nota_$i'>Nota $i:</label>";
            echo "<input type='number' id='nota_$i' name='nota_$i' step='0.1' required min='$nota_minima' max='$nota_maxima'>";
            }
        echo "<input type='hidden' name='materia' value='$materia'>";
        echo "<input type='hidden' name='cantidad_notas' value='$num_notas'>";
        echo "<input type='hidden' name='nota_minima' value='$nota_minima'>";
        echo "<input type='hidden' name='nota_maxima' value='$nota_maxima'>";
        echo "<input type='submit' value='Calcular'>";
        echo "</form>";
    ?>
    <br><br>
<div>
<button onclick="window.history.back()">Regresar</button>
</div>
</body>

</html>