<?php
/* Subida de archivos desde formularios
 - Crea un formulario HTML simple con enctype="multipart/form-data"
 - En el Script PHP: 
   - Usa move_uploaded_file para guardar el archivo en una carpeta segura (uploads/) 
   - Comprueba el nombre seguro del archivo usando basename() 
   - Comprueba tamaño (menor de 2mb) y tipo de archivo (solo aceptamos jpg, jpeg, png o gif)*/
$carpeta = "./uploads/";
if (!is_dir($carpeta)) {
    mkdir($carpeta);
}

$tiposValidos = ["image/jpg", "image/jpeg", "image/png", "image/gif"];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivo"])) {
    $nombreTmp = $_FILES["archivo"]["tmp_name"];
    $nombre = $_FILES["archivo"]["name"];
    $tipo = $_FILES["archivo"]["type"];
    $tamanio = $_FILES["archivo"]["size"];
    $error = $_FILES["archivo"]["tmp_name"];
    if ($tamanio > 2097152) {
        echo "El archivo es más grande de 2MB no podemos seguir.";
    } else {
        $esValido = false;
        for ($i = 0; $i < count($tiposValidos); $i++) {
            if ($tipo == $tiposValidos[$i]) {
                $esValido = true;
            } 
        }
        if ($esValido){
            $destino = $carpeta . basename($nombre);
                if (move_uploaded_file($nombreTmp, $destino)) {
                    echo "Archivo subido correctamente a $destino";
                } else {
                    echo "Error al subir el archivo. No es un tipo válido";
                }
        }
    }
} else {
    echo "Algo hay mal";
}
