<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Áreas</title>
    <style>

h1 {
    color: #333;
    font-size: 24px;
    text-align: center;
}

label {
    font-weight: bold;
}

form {
    margin: 20px;
    padding: 10px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    background-color: #1f4c7c;
    color: #fff;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
}
.formulario-background {
    background-color: #9a3333;
    background-image: url('geometric.jpg'); 
    padding: 10px;
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
    <h1>Calculadora de Áreas</h1>
    <div div class="formulario-background">

    <form action="/taller_html_php/ejercicio2/interfaz/procesamientoDatos.php" method="post">
        <label>Circulo:</label><br>
        <label>Radio: </label>
        <input type="number" step="any" name="radio">
        <input type="submit" value="Calcular Área" name="areaCirculo">
    </form>
    
    <form action="/taller_html_php/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Cuadrado:</label><br>
        <label>Lado: </label>
        <input type="number" step="any" name="lado">
        <input type="submit" value="Calcular Área" name="areaCuadrado">
    </form>
    <form action="/taller_html_php/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Rectángulo:</label><br>
        <label>Base: </label>
        <input type="number" step="any" name="baseR">
        <label>Altura: </label>
        <input type="number" step="any" name="alturaR">
        <input type="submit" value="Calcular Área" name="areaRectangulo">
    </form>
    <form action="/taller_html_php/ejercicio2/interfaz/procesamientoDatos.php" method="post">
    <label>Triángulo:</label><br>
        <label>Base: </label>
        <input type="number" step="any" name="baseT">
        <label>Altura: </label>
        <input type="number" step="any" name="alturaT">
        <input type="submit" value="Calcular Área" name="areaTriangulo">
    </form>
    <button onclick="window.history.back()">Regresar</button>

    </div>
   

</body>
</html>

