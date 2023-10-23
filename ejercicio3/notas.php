<!DOCTYPE html>
<html>
<head>
    <title>Ingrese sus notas</title>
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
            color: #fff;
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