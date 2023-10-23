<!DOCTYPE html>
<html>
<head>
    <style>
            body {
            background-image: url('prom.jpg'); 
            background-size: cover;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #44878f;
            color: #fff;
            padding: 50px;
            text-align: center;
        }
        
        label {
            display: block;
            margin: 20px 20px;
            color: #5a9b95;
            text-align: center;
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

    echo "<label>Rango de notas: de $nota_minima a $nota_maxima<br></label>"; 
    echo "<label>Nota mínima para aprobar: $nota_minima_aprobar<br></label>";
    echo "<label>Notas:<br>$notas</label>"; 
    echo "<label>Promedio: $promedio<br></label>";

    if ($promedio >= $nota_minima_aprobar) {
        echo "<h2>¡Felicidades, ha aprobado la materia!</h2>";
    } else {
        echo "<h2>Lo siento, no ha aprobado la materia.</h2>";
    }

    ?>
    <br>
    <br>
    <div>
        <button onclick="window.history.back()">Regresar</button>
    </div>
</body>
</html>