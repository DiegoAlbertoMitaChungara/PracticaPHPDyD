<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<?php
    session_start();

    echo"Definitivamente perteneces a la raza de los ".$_SESSION["razaPersonaje"].", ".$_SESSION["nombrePersonaje"];
?>
<body>
    <h1>Clases de Dungeons & Dragons</h1>
    <p>
        En Dungeons & Dragons existen diversas clases únicas. Algunas de las principales son:<br><br>
        <strong>Bárbaro:</strong> Guerrero feroz que canaliza su furia y fuerza bruta en el combate, destacando en la agresividad y el poder físico.
        <br>
        <strong>Bardo:</strong> Artista encantador que usa la música, la poesía y habilidades mágicas para inspirar y manipular a aliados y adversarios.
        <br>
        <strong>Brujo:</strong> Portador de magia oscura adquirida a través de pactos con entidades misteriosas, su poder es tan enigmático como peligroso.
        <br>
        <strong>Clérigo:</strong> Devoto de una deidad, que utiliza la fe y el poder divino para sanar, proteger y luchar contra el mal.
        <br>
        <strong>Druida:</strong> Guardián de la naturaleza que convoca el poder de los elementos, protegiendo el equilibrio natural del mundo.
        <br>
        <strong>Explorador:</strong> Experto en rastreo, sigilo y supervivencia, ideal para emboscadas y para navegar terrenos inhóspitos.
        <br>
        <strong>Guerrero:</strong> Combatiente versátil y disciplinado, entrenado en múltiples estilos de lucha y armado para enfrentar cualquier desafío.
        <br>
        <strong>Hechicero:</strong> Usuario de magia innata, cuyo poder surge de su propia esencia, manifestándose de forma explosiva y natural.
        <br>
        <strong>Mago:</strong> Erudito del conocimiento arcano, capaz de aprender y lanzar una amplia variedad de hechizos a través del estudio riguroso.
        <br>
        <strong>Monje:</strong> Maestro de la disciplina física y mental, que combina artes marciales y meditación para lograr un equilibrio perfecto.
        <br>
        <strong>Paladín:</strong> Caballero sagrado comprometido con la justicia, que canaliza habilidades divinas para proteger a los inocentes y combatir el mal.
        <br>
        <strong>Pícaro:</strong> Especialista en el sigilo, la astucia y los trucos, ideal para emboscadas y para aprovechar la precisión en el combate.
    </p>

    <form action="pagina3.php" method="POST">

        <!-- Pregunta 1 -->
        <p>¿A cuántos enemigos preferirías enfrentar en combate, <?php $_SESSION["nombrePersonaje"] ?>?</p>
        <input type="number" name="pregunta1" min="1" max="30" value="1">

        <!-- Pregunta 2 -->
        <p>Elige el color con el que te sientas más identificado, <?php $_SESSION["nombrePersonaje"] ?>?</p>
        <input type="color" name="pregunta2">
        
        <!-- Pregunta 3 -->
        <p>¿Cuántas aliados prefieres tener a tu lado en una batalla decisiva, <?php $_SESSION["nombrePersonaje"] ?>? (0-25)</p>
        <input type="range" name="pregunta3" min="0" max="25" style="width: 500px;">

        <!-- Pregunta 4 -->
        <p>¿En qué fecha iniciarías tu aventura épica, <?php $_SESSION["nombrePersonaje"] ?>? (solo se evalúa el mes y el día)</p>
        <input type="date" name="pregunta4" min="2025-01-01" max="2025-12-31">

        <br><br>
        <input type="submit" value="Conocer Clase">


    </form>
    <?php

        if(isset($_REQUEST["pregunta1"])){
            $_SESSION["respuesta1Clase"] = $_REQUEST["pregunta1"];
        }
        if(isset($_REQUEST["pregunta2"])){
            $_SESSION["respuesta2Clase"] = $_REQUEST["pregunta2"];
        }
        if(isset($_REQUEST["pregunta3"])){
            $_SESSION["respuesta3Clase"] = $_REQUEST["pregunta3"];
        }
        if(isset($_REQUEST["pregunta4"])){
            $_SESSION["respuesta4Clase"] = $_REQUEST["pregunta4"];
        }

        //echo "Respuestas: ".$_SESSION["respuesta1Clase"]." , ".$_SESSION["respuesta2Clase"]." , ".$_SESSION["respuesta3Clase"]." , ".$_SESSION["respuesta4Clase"];

        //Creación de un array que contendrá los puntos que tiene cada clase 
        for($i = 0; $i < 12; $i++){
            $clases[$i] = 0;
        }

        /*
            En el array "clases":
            (Clase-índice) 
            Barbaro - 0
            Bardo - 1
            Brujo - 2
            Clerigo - 3
            Druida - 4
            Explorador - 5
            Guerrero - 6
            Hechicero - 7
            Mago - 8
            Monje - 9
            Paladin - 10
            Pícaro - 11

        */

        //Asignación de puntos según las respuestas de la pregunta 1
        if($_SESSION["respuesta1Clase"] == 1){
            $clases[11]++;
        }
        else if($_SESSION["respuesta1Clase"] == 2){
            $clases[9]++;
        }
        else if($_SESSION["respuesta1Clase"] == 3){
            $clases[5]++;
        }
        else if($_SESSION["respuesta1Clase"] == 4 || $_SESSION["respuesta1Clase"] == 5){
            $clases[6]++;
        }
        else if($_SESSION["respuesta1Clase"] == 6 || $_SESSION["respuesta1Clase"] == 7){
            $clases[10]++;
        }
        else if($_SESSION["respuesta1Clase"] == 8 || $_SESSION["respuesta1Clase"] == 9){
            $clases[0]++;
        }
        else if($_SESSION["respuesta1Clase"] >= 10 && $_SESSION["respuesta1Clase"] <= 12){
            $clases[3]++;
        }
        else if($_SESSION["respuesta1Clase"] >= 13 && $_SESSION["respuesta1Clase"] <= 15){
            $clases[4]++;
        }
        else if($_SESSION["respuesta1Clase"] >= 16 && $_SESSION["respuesta1Clase"] <= 18){
            $clases[1]++;
        }
        else if($_SESSION["respuesta1Clase"] == 19 || $_SESSION["respuesta1Clase"] == 20){
            $clases[2]++;
        }else{
            $clases[7]++;
            $clases[8]++;
        }


        //Asignación de puntos en función de las respuestas de la pregunta 2

        /*
            Barbaro = rojo
            Bardo = cian
            Brujo = morado
            Clerigo = blanco
            Druida = marrón
            Explorador = verde
            Guerrero = gris
            Hechicero = naranja
            Mago = azul
            Monje = amarillo
            Paladin = azul oscuro
            Pícaro = negro
        */

        include "funciones.php";
        $colorDominante = cogeColorDominante($_SESSION["respuesta2Clase"]);

        if($colorDominante == "Rojo"){
            $clases[0]++;
            $clases[4]++;
        }
        else if($colorDominante == "Verde"){
            $clases[5]++;
        }
        else if($colorDominante == "Azul"){
            $clases[8]++;
            $clases[4]++;
        }
        else if($colorDominante == "Amarillo"){
            $clases[9]++;
            $clases[7]++;
        }
        else if($colorDominante == "Magenta"){
            $clases[2]++;
        }
        else if($colorDominante == "Blanco"){
            $clases[3]++;
            $clases[4]++;
        }
        else if($colorDominante == "Cian"){
            $clases[1]++;
        }else{
            $clases[11]++;
            $clases[6]++;
            $clases[10]++;
        }


        //Asignación de puntos en función de las respuestas de la pregunta 3

        if($_SESSION["respuesta3Clase"] == 0){
            $clases[11]++;
        }
        else if($_SESSION["respuesta3Clase"] == 1){
            $clases[9]++;
        }
        else if($_SESSION["respuesta3Clase"] == 2){
            $clases[5]++;
        }
        else if($_SESSION["respuesta3Clase"] == 3 || $_SESSION["respuesta3Clase"] == 4){
            $clases[6]++;
        }
        else if($_SESSION["respuesta3Clase"] == 5 || $_SESSION["respuesta3Clase"] == 6){
            $clases[10]++;
        }
        else if($_SESSION["respuesta3Clase"] == 7 || $_SESSION["respuesta3Clase"] == 8){
            $clases[0]++;
        }
        else if($_SESSION["respuesta3Clase"] == 9 || $_SESSION["respuesta3Clase"] == 10){
            $clases[3]++;
        }
        else if($_SESSION["respuesta3Clase"] == 11 || $_SESSION["respuesta3Clase"] == 12){
            $clases[4]++;
        }
        else if($_SESSION["respuesta3Clase"] >= 13 && $_SESSION["respuesta3Clase"] <= 15){
            $clases[1]++;
        }
        else if($_SESSION["respuesta3Clase"] >= 16 && $_SESSION["respuesta3Clase"] <= 18){
            $clases[2]++;
        }
        else if($_SESSION["respuesta3Clase"] == 19 || $_SESSION["respuesta3Clase"] == 20){
            $clases[7]++;
        }else{
            $clases[8]++;
        }

        //Asignación de puntos en función de las respuestas de la pregunta 4
        $fechaIntroducida = strtotime($_SESSION["respuesta4Clase"]);
        $mesIntroducido = date("n", $fechaIntroducida); //devuelve solo el mes introducido, "n" para que te devuelva el mes sin 0s a la izquierda

        if($mesIntroducido == 1){
            $clases[5]++;
            $clases[6]++;
            $clases[10]++;
        }
        else if($mesIntroducido == 2){
            $clases[0]++;
            $clases[2]++;
            $clases[9]++;
        }
        else if($mesIntroducido == 3){
            $clases[3]++;
            $clases[4]++;
            $clases[7]++;
        }
        else if($mesIntroducido == 4){
            $clases[1]++;
            $clases[8]++;
            $clases[11]++;
        }
        else if($mesIntroducido == 5){
            $clases[4]++;
        }
        else if($mesIntroducido == 6){
            $clases[9]++;
            $clases[10]++;
        }
        else if($mesIntroducido == 7){
            $clases[2]++;
            $clases[3]++;
            $clases[7]++;
        }
        else if($mesIntroducido == 8){
            $clases[1]++;
            $clases[8]++;
            $clases[11]++;
        }
        else if($mesIntroducido == 9){
            $clases[4]++;
            $clases[5]++;
            $clases[6]++;
        }
        else if($mesIntroducido == 10){
            $clases[0]++;
            $clases[2]++;
            $clases[10]++;
        }
        else if($mesIntroducido == 11){
            $clases[3]++;
            $clases[7]++;
            $clases[8]++;
        }
        else{
            $clases[1]++;
            $clases[2]++;
            $clases[11]++;
        }

        
        //Elección de clase ganadora
        $claseGanadora = indiceElementoMayor($clases);

        /*
            En el array "clases":
            (Clase-índice) 
            Barbaro - 0
            Bardo - 1
            Brujo - 2
            Clerigo - 3
            Druida - 4
            Explorador - 5
            Guerrero - 6
            Hechicero - 7
            Mago - 8
            Monje - 9
            Paladin - 10
            Pícaro - 11

        */

        if($claseGanadora == 0){
            $_SESSION["clasePersonaje"] = "barbaro";
        }else if($claseGanadora == 1){
            $_SESSION["clasePersonaje"] = "bardo";
        }else if($claseGanadora == 2){
            $_SESSION["clasePersonaje"] = "brujo";
        }else if($claseGanadora == 3){
            $_SESSION["clasePersonaje"] = "clérigo";
        }else if($claseGanadora == 4){
            $_SESSION["clasePersonaje"] = "druida";
        }else if($claseGanadora == 5){
            $_SESSION["clasePersonaje"] = "explorador";
        }else if($claseGanadora == 6){
            $_SESSION["clasePersonaje"] = "guerrero";
        }else if($claseGanadora == 7){
            $_SESSION["clasePersonaje"] = "hechicero";
        }else if($claseGanadora == 8){
            $_SESSION["clasePersonaje"] = "mago";
        }else if($claseGanadora == 9){
            $_SESSION["clasePersonaje"] = "monje";
        }else if($claseGanadora == 10){
            $_SESSION["clasePersonaje"] = "paladín";
        }else if($claseGanadora == 11){
            $_SESSION["clasePersonaje"] = "druida";
        }else{
            $_SESSION["clasePersonaje"] = "pícaro";
        }

    ?>
    
</body>
</html>