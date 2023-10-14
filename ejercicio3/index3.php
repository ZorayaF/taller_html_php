<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Promedio</title>
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
        
    </form>
</body>
</html>