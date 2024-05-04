<?php
//obtener valores del formulario
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];
// se actualiza daros
//operaciones
switch ($operacion) {
    case 'suma':
        $resultado= $numero1 + $numero2;
        break;
    case  'resta':
        $resultado = $numero1 - $numero2;
        break;
    case  'multiplicacion':
        $resultado = $numero1 * $numero2;
        break;
    case   'division':
        $resultado = $numero1 / $numero2;
        break;
    
    default:
        $resultado="Error en la operación";
}
echo json_encode(array("Resultado" => $resultado)); //envio de resultado al script js