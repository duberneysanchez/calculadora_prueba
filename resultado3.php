<?php
// Verifica si se recibieron los datos necesarios
if(isset($_POST['operacion'], $_POST['numero1'], $_POST['numero2'])) {
    // Obtiene los datos del formulario
    $operacion = $_POST['operacion'];
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];

    // Realiza la operación según la selección del usuario
    switch($operacion) {
        case 'suma':
            $resultado3 = $numero1 + $numero2;
            break;
        case 'resta':
            $resultado3 = $numero1 - $numero2;
            break;
        case 'multiplicacion':
            $resultado3 = $numero1 * $numero2;
            break;
        case 'division':
            // Verifica si el divisor es 0 para evitar una división por cero
            if($numero2 != 0) {
                $resultado3 = $numero1 / $numero2;
            } else {
                $resultado3 = "Error: División por cero";
            }
            break;
        default:
            $resultado3 = "Operación no válida";
    }

    // Devuelve el resultado al cliente
    echo $resultado3;
} else {
    // Si faltan datos, devuelve un mensaje de error
    echo "Error: Datos incompletos";
}

