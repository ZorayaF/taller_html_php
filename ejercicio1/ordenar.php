<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado:</h1>
    <?php
    if (isset($_POST['numeros'])) {
        $input = $_POST['numeros'];
        $numeros = explode(',', $input);
        
        // Ordenar la lista de menor a mayor
        sort($numeros);
        
        // Separar números pares e impares
        $pares = [];
        $impares = [];
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                $pares[] = $numero;
            } else {
                $impares[] = $numero;
            }
        }
        
        // Ordenar la lista de pares de mayor a menor
        rsort($pares);
        
        // Ordenar la lista de impares de menor a mayor
        sort($impares);
        
        echo "<h2>Lista de números ordenada de menor a mayor:</h2>";
        echo implode(', ', $numeros);
        
        echo "<h2>Lista de números pares ordenada de mayor a menor:</h2>";
        echo implode(', ', $pares);
        
        echo "<h2>Lista de números impares ordenada de menor a mayor:</h2>";
        echo implode(', ', $impares);
    } else {
        echo "<p>Por favor, ingrese una lista de números.</p>";
    }
    ?>
</body>
</html>
