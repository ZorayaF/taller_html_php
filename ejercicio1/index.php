<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ordenar Lista de Números</title>
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
            color: #fff;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #fff;
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
    <h1>Ordenar Lista de Números</h1>
    <form action="ordenar.php" method="post">
        <label for="numeros">Ingrese la lista de números separados por comas:</label>
        <input type="text" name="numeros" id="numeros">
        <input type="submit" value="Ordenar">
        <button onclick="window.history.back()">Regresar</button>
    </form>
</body>
</html>

