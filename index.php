<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Taller con HTML</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #44878f;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            text-align: center;
        }
        li {
            display: inline-block;
            margin: 0;
        }
        a {
            text-decoration: none;
            color: #44878f;
            font-weight: bold;
            padding: 20px 6px;
        }
        a:hover {
            background-color: #ff8591;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Menú de navegación</h1>
    <ul>
        <li><a href="/taller_html_php/ejercicio1/index.php">Lista de números</a></li>
        <li><a href="/taller_html_php/ejercicio2/interfaz/iuFiguras.php">Cálculo del área de figuras geométricas</a></li>
        <li><a href="/taller_html_php/ejercicio3/index3.php">Cálculo del promedio de asignaturas</a></li>
        <li><a href="#">Gestión de docentes y cursos</a></li>
    </ul>
</body>
</html>
