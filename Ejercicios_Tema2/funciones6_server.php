<?php
$n1 = null;
$n2 = null;
$opcion = null;
$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = trim($_POST["numero1"]); 
    $n2 = trim($_POST["numero2"]); 
    $opcion = trim($_POST["numero3"]); 

    switch ($opcion){
        case 1: 
            $resultado = sumar($n1,$n2);
            break;
        case 2: 
            $funcion = function($n1,$n2) {
                return $n1-$n2;
            };
            $resultado = $funcion($n1,$n2);
            break;
        case 3: 
            $funcion = fn($a, $b) => $a * $b;
            $resultado = $funcion($n1, $n2);
            break;
        case 4:
            $resultado = dividir($n1,$n2);
            break;
        case 5: 
            $resultado = "¡Adiós!";
            break;
        default:
            $resultado = "Tiene que ser un número entre 1 y 5 para que haga algo";
            break;
    }
}

function sumar($n1,$n2){
    return $n1 + $n2;
}

function dividir($n1,$n2){
    if ($n2 == 0){
        return "No se puede dividir por 0";
    }else{
        return $n1 / $n2;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form method="post">
        <label>Introduce el primer número</label><br>
        <input type="number" name="numero1" step="any" required><br><br>

        <label>Introduce el segundo número</label><br>
        <input type="number" name="numero2" step="any" required><br><br>

        <label>¿Qué operación quieres hacer?</label><br>
        <select name="numero3" required>
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
            <option value="5">Salir</option>
        </select><br><br>

        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado !== null): ?>
        <p><strong>El resultado es:</strong> <?= $resultado ?></p>
    <?php endif; ?> 
</body>
</html>
