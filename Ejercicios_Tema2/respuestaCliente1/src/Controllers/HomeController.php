<?php

namespace Alonsoad\Formulario\Controllers;

class HomeController
{
    public function index()
    {
        $archivo = __DIR__ . '/../Views/formulario.html';
        if (file_exists($archivo)) {
            echo file_get_contents($archivo);
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }

    public function validarEntrada($data)
    {
        // nombre letras y espacios
        // contraseña con min 8 cteres, mayuscula, minuscula, números, cteres especiales
        // email correcto

        $regexNombre = '/^[A-Za-zÁÉÍÓÚáéíóúÑñ \'-]+$/';
        $regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/';
;
        $esValido = true;

        if (
            isset($data['nombre']) && !empty($data['nombre'])
            && isset($data['email']) && !empty($data['email'])
            && isset($data['password']) && !empty($data['password'])
        ) {
            if (preg_match($regexNombre, $data['nombre'])) {
            } else {
                $esValido = false;
                echo "<h1>Nombre del usuario inválido. Sólo valen letras y espacios</h1>";
            }

            if (preg_match($regexPassword, $data['password'])) {
                
            } else {
                $esValido = false;
                echo "<h1>Contraseña inválida.</h1>";
                echo "<h3>Tiene que contener: </h3>";
                echo "<ul>
                        <li> Mínimo 8 caracteres</li>
                        <li> Mayúsculas y minúsculas</li>
                        <li> Números</li>
                        <li> Caracteres especiales</li>
                    </ul>";
            }

            if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            } else {
                $esValido = false;
                echo "<h1>Correo del usuario inválido. Tiene que ser algo así: x@x.com</h1>";
            }

            if ($esValido) {
                echo "<h1>Registro exitoso!!</h1>";
            }
        } else {
            echo "<h1>Tienes que introducir los tres campos con datos para que te muestre algo</h1>";
        }
    }
}
