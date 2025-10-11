<?php
$titulo = "Ejercicio Punto 8.3";
$encabezado = "Probando el ejercicio de buffers";
$contenido = "Lorem Ipsum";
$redirigir = true;

ob_start();
require './template.php';

$html = ob_get_clean();

if ($redirigir) {
    header('Location: /otraPagina.html');
} else {
    $html = str_replace("Ipsum", "Alonso", $html);
    echo $html;
}
