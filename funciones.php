<?php
/**
 * Método que recibe un color y te devuelve el color que predomina en él
 * @param mixed $hexColor Color en hexadecimal
 * @return string Color predominante (cadena de texto)
 */
function cogeColorDominante($hexColor)
{
    // Extraer los valores de Rojo, Verde y Azul
    list($r, $g, $b) = sscanf($hexColor, "#%02x%02x%02x");

    // Determinar el color dominante
    if ($r > $g && $r > $b) {
        return "Rojo";
    } else if ($g > $r && $g > $b) {
        return "Verde";
    } else if ($b > $r && $b > $g) {
        return "Azul";
    } else if ($r == $g && $r > $b) {
        return "Amarillo";
    } else if ($r == $b && $r > $g) {
        return "Magenta";
    } else if ($g == $b && $g > $r) {
        return "Cian";
    } else if ($r == 255 && $g == 255 && $b == 255) {
        return "Blanco";
    }else {
        return "Gris/Neutro";
    }
}

/**
 * Método que recibe un array de números y te devuelve el índice del elemento que mayor valor contenga
 * @param mixed $array Array de números
 * @return int Índice del elemento cuyo valor sea el mayor
 */
function indiceElementoMayor($array){
    $numMayor = 0;
    $guardaIndice = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $numMayor){
            $numMayor = $array[$i];
            $guardaIndice = $i;
        }
    }
    return $guardaIndice;
}

?>