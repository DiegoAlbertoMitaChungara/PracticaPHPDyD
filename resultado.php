<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<?php
    session_start();

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

    echo "<p>Nacido en tierras marcadas por antiguas leyendas, "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." creció inmerso en las tradiciones y secretos de su pueblo "."<strong>".$_SESSION["razaPersonaje"]."</strong>".". Desde muy joven, aprendió el valor de la sabiduría y el coraje, impulsándole a forjar su propio camino. Con un espíritu indomable se adentró en el mundo, decidido a descubrir y dominar los misterios que el destino le tenía reservados.

    Durante su adolescencia, "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." el "."<strong>".$_SESSION["razaPersonaje"]."</strong>"." encontró en la disciplina y el aprendizaje la llave para desentrañar las habilidades únicas de su linaje. Con gran pasión, eligió el sendero del "."<strong>".$_SESSION["clasePersonaje"]."</strong>".", esta decisión no fue casualidad, ya que el destino parecía haberle señalado hacia una misión mayor: proteger a los suyos y mantener vivas las leyendas que contaban las antiguas generaciones.

    Armado con su confiable "."<strong>".$_SESSION["armaPersonaje"]."</strong>".", "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." emprendió una serie de aventuras que le llevaron por reinos olvidados, bosques encantados y ciudades en ruinas. Cada batalla y cada encuentro le permitieron perfeccionar sus habilidades, mientras forjaba alianzas y enfrentaba enemigos tan temibles como los mitos que alguna vez escuchó de niño. La "."<strong>".$_SESSION["armaPersonaje"]."</strong>"." no solo es un instrumento de combate, sino el símbolo tangible de su compromiso con el honor y la justicia, reflejando la dualidad de su ser: fuerza y sabiduría, tradición e innovación.

    Hoy, este "."<strong>".$_SESSION["razaPersonaje"]." ".$_SESSION["clasePersonaje"]."</strong>"." continúa su viaje, guiado por un firme código moral heredado de sus ancestros y por la convicción de que cada acción, cada decisión, moldea el futuro de su raza y del mundo que lo rodea.</p>"
    ?>
<body>
    
</body>
</html>