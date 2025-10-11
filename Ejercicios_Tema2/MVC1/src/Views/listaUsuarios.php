<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Punto 9</title>
</head>
<body>
    <h1>Lista de Nombres</h1>
    <ul <?= $data ?>>
    </ul>
    <hr>
    <form action="./procesar">
        <label for="usuario">Introduce el nombre del usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <button type="submit">Crear usuario</button>
    </form>
</body>
</html>