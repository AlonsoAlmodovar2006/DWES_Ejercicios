<?php 
session_start();

if (!isset($_SESSION["aleatorio"])) {
    $_SESSION["aleatorio"] = rand(1, 100);
}

$consola = null;
if ($_SERVER["REQUEST_METHOD"] == "POST")  {
    $aleatorio = $_SESSION["aleatorio"];
    $consola = trim($_POST["numeros"]);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Adivina el número</title>
</head>
<body>
    <h2>Adivina el número</h2>
    <h3>Pon números hasta que adivines el que he puesto jiji</h3>
    <form method="post">
        <input type="text" name="numeros" placeholder="Introduce un número: "required>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($consola !== null): ?>
        <?php if ($consola > $aleatorio): ?>
            <p><?= $consola ?> es mayor</p>
        <?php endif; ?>
        <?php if ($consola < $aleatorio): ?>
            <p><?= $consola ?> es menor</p>
        <?php endif; ?>
        <?php if ($consola === $aleatorio): ?>
            <p><strong>Enhorabuena!!!!</strong></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>