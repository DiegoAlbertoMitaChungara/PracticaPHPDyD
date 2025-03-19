<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<?php
    if(isset($_REQUEST["pregunta1.1H"])){
        $_SESSION["respuesta1Habilidad"] = $_REQUEST["pregunta1.1H"];
    }else{
        $_SESSION["respuesta1Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.2H"])){
        $_SESSION["respuesta2Habilidad"] = $_REQUEST["pregunta1.2H"];
    }else{
        $_SESSION["respuesta2Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.3H"])){
        $_SESSION["respuesta3Habilidad"] = $_REQUEST["pregunta1.3H"];
    }else{
        $_SESSION["respuesta3Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.4H"])){
        $_SESSION["respuesta4Habilidad"] = $_REQUEST["pregunta1.4H"];
    }else{
        $_SESSION["respuesta4Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.5H"])){
        $_SESSION["respuesta5Habilidad"] = $_REQUEST["pregunta1.5H"];
    }else{
        $_SESSION["respuesta5Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.6H"])){
        $_SESSION["respuesta6Habilidad"] = $_REQUEST["pregunta1.6H"];
    }else{
        $_SESSION["respuesta6Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.7H"])){
        $_SESSION["respuesta7Habilidad"] = $_REQUEST["pregunta1.7H"];
    }else{
        $_SESSION["respuesta7Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.8H"])){
        $_SESSION["respuesta8Habilidad"] = $_REQUEST["pregunta1.8H"];
    }else{
        $_SESSION["respuesta8Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.9H"])){
        $_SESSION["respuesta9Habilidad"] = $_REQUEST["pregunta1.9H"];
    }else{
        $_SESSION["respuesta9Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.10H"])){
        $_SESSION["respuesta10Habilidad"] = $_REQUEST["pregunta1.10H"];
    }else{
        $_SESSION["respuesta10Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.11H"])){
        $_SESSION["respuesta11Habilidad"] = $_REQUEST["pregunta1.11H"];
    }else{
        $_SESSION["respuesta11Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.12H"])){
        $_SESSION["respuesta12Habilidad"] = $_REQUEST["pregunta1.12H"];
    }else{
        $_SESSION["respuesta12Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.13H"])){
        $_SESSION["respuesta13Habilidad"] = $_REQUEST["pregunta1.13H"];
    }else{
        $_SESSION["respuesta13Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.14H"])){
        $_SESSION["respuesta14Habilidad"] = $_REQUEST["pregunta1.14H"];
    }else{
        $_SESSION["respuesta14Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta15.1H"])){
        $_SESSION["respuesta15Habilidad"] = $_REQUEST["pregunta1.15H"];
    }else{
        $_SESSION["respuesta15Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta16.1H"])){
        $_SESSION["respuesta16Habilidad"] = $_REQUEST["pregunta1.16H"];
    }else{
        $_SESSION["respuesta16Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.7H"])){
        $_SESSION["respuesta17Habilidad"] = $_REQUEST["pregunta1.17H"];
    }else{
        $_SESSION["respuesta17Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1.18H"])){
        $_SESSION["respuesta1Habilidad"] = $_REQUEST["pregunta1.18H"];
    }else{
        $_SESSION["respuesta18Habilidad"] = "No";
    }





    //Prueba lectura JSON
    session_start();

    // Leer variables de sesión
    $var1 = isset($_SESSION['variable1']) ? $_SESSION['variable1'] : null;
    $var2 = isset($_SESSION['variable2']) ? $_SESSION['variable2'] : null;

    // Verificar que las variables existan
    if ($var1 === null || $var2 === null) {
        echo "Las variables de sesión no están definidas.";
        exit;
    }

    // Ejemplo: generar una clave a partir de las dos variables.
    // Dependiendo de cómo necesites evaluar la combinación, puedes ajustar este paso.
    $clave = $var1 . "_" . $var2;

    // Array de combinaciones: cada combinación se asocia a un id único del JSON.
    // Deberás definir las 108 combinaciones aquí.
    $combinaciones = [
        'valor1_valor2'       => 'id1',
        'valor1_otroValor'    => 'id2',
        // Agrega todas las demás combinaciones...
    ];

    // Validar que la combinación exista
    if (!array_key_exists($clave, $combinaciones)) {
        echo "Combinación no válida.";
        exit;
    }

    $idBuscado = $combinaciones[$clave];

    // Ruta del archivo JSON
    $jsonFile = 'trasfondos.json';

    // Verificar que el archivo exista
    if (!file_exists($jsonFile)) {
        echo "Archivo JSON no encontrado.";
        exit;
    }


    //Leer el contenido
    $json=file_get_contents("trasfondos.json");
    //Convierte el JSON a un array asociativo
    $datos=json_decode($json,true);
    if($datos === null){
        die("Error al leer los trasfondos");
    }
    if (isset($datos[$idBuscado])) {
        $texto = $datos[$idBuscado];
        echo $texto;
    } else {
        echo "Texto no encontrado para el id: " . $idBuscado;
    }
    ?>
<body>
    
</body>
</html>