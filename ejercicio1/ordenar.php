<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
<style>
    body {
            background-image: url('tu_imagen_de_fondo.jpg'); /* Ruta de tu imagen de fondo */
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
    <br>
    <br>
            <button onclick="window.history.back()">Regresar</button>

</body>
</html>
