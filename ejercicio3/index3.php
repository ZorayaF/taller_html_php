<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio</title>
    <style>
        body {
            background-image: url('prom.jpeg'); 
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
            color: #5a9b95;
            font-weight: bold;
            display: block;
            margin: 10px 0;
        }
        input[type="text"],
        input[type="number"] {
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
    <h1>Calculadora de Promedio</h1>
    <form action="notas.php" method="post">

        <label for="materia">Materia:</label>
        <input type="text" id="materia" name="materia" required><br><br>
        
        <label for="num_notas">Numero de notas:</label>
        <input type="number" id="num_notas" name="num_notas" required min="2"><br><br>

        <label for="min_calif">Calificación Mínima:</label>
        <input type="number" id="min_calif" name="min_calif" step="0.1" required min="0" max="10"><br><br>

        <label for="max_calif">Calificación Máxima:</label>
        <input type="number" id="max_calif" name="max_calif" step="0.1" required min="0" max="10"><br><br>

        <?php
        if (isset($_POST['num_notas'])) {
            $num_notas = $_POST['num_notas'];
            for ($i = 1; $i <= $num_notas; $i++) {
                echo '<label for="nota' . $i . '">Nota ' . $i . ':</label>';
                echo '<input type="number" name="nota' . $i . '" step="0.1" required min="' . $_POST['min_calif'] . '" max="' . $_POST['max_calif'] . '"><br><br>';
            }
        }
        ?>

        <input type="submit" value="Calcular">
        <button onclick="window.history.back()">Regresar</button>
    </form>
</body>
</html>