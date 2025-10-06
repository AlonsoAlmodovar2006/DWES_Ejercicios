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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["archivos"])) {
    foreach ($_FILES["archivos"]["tmp_name"] as $i => $tmp) {
        $nombre = $_FILES["archivos"]["name"][$i];
        $tipo = $_FILES["archivos"]["type"][$i];
        $tamanio = $_FILES["archivos"]["size"][$i];
        $error = $_FILES["archivos"]["error"][$i];
        if ($tamanio > 2097152) {
            echo "El archivo es más grande de 2MB no podemos seguir.";
        } else {
            $esValido = false;
            for ($j = 0; $j < count($tiposValidos); $j++) {
                if ($tipo == $tiposValidos[$j]) {
                    $esValido = true;
                }
            }
            if ($esValido) {
                $destino = $carpeta . basename($nombre);
                if (move_uploaded_file($tmp, $destino)) {
                    echo "Archivo subido correctamente a $destino <br>";
                } else {
                    echo "Error al subir el archivo. No es un tipo válido";
                }
            }
        }
        if (is_uploaded_file($tmp)){
            echo "Archivo subido correctamente a $destino <br>";
        }else{
            echo "Error al subir el archivo.";
        }
    }
} else {
    echo "Algo hay mal";
}
