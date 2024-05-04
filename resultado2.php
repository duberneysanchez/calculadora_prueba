<?php
if (isset($_POST['button'])) {
    //obtener valores del formulario
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $operacion = $_POST['operacion'];
    calcular($operacion);
}

     function calcular($calculo){
    if (!strcmp("suma", $calculo)) { 
        global $numero1, $numero2;
        $suma = $numero1 + $numero2; 
        echo "La suma de los numeros es: $suma";
    }
    if (!strcmp("resta", $calculo)) { 
        global $numero1, $numero2;
        echo "La resta de los numeros es: ".($numero1 - $numero2);
    }
    if (!strcmp("multiplicacion", $calculo)) { 
        global $numero1, $numero2;
        echo "La multiplicacion de los numeros es: ".($numero1 * $numero2);
    }
    if (!strcmp("division", $calculo)) {
        global $numero1, $numero2;
        if ($numero2 != 0) {
            echo "La division de los numeros es: ".($numero1 / $numero2);
        } else {
            echo "Error: división por cero";
        }
    }
}

