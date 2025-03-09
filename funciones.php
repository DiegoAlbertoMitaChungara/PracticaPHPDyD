<?php
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



?>