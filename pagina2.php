<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<?php
    session_start();
    //Importante añadir cada pregunta de los checkbox(Ya hecho)
            
    if(isset($_REQUEST["pregunta1"])) {
        $_SESSION["respuesta1"] = $_REQUEST["pregunta1"];
    }
    if(isset($_REQUEST["pregunta2"])){
        $_SESSION["respuesta2"] = $_REQUEST["pregunta2"];
    }
    if(isset($_REQUEST["pregunta3.1"])){
        $_SESSION["respuesta3.1"] = $_REQUEST["pregunta3.1"];
    }else{
        $_SESSION["respuesta3.1"] = "No";
    }
    if(isset($_REQUEST["pregunta3.2"])){
        $_SESSION["respuesta3.2"] = $_REQUEST["pregunta3.2"];
    }else{
        $_SESSION["respuesta3.2"] = "No";
    }
    if(isset($_REQUEST["pregunta3.3"])){
        $_SESSION["respuesta3.3"] = $_REQUEST["pregunta3.3"];
    }else{
        $_SESSION["respuesta3.3"] = "No";
    }
    if(isset($_REQUEST["pregunta3.4"])){
        $_SESSION["respuesta3.4"] = $_REQUEST["pregunta3.4"];
    }else{
        $_SESSION["respuesta3.4"] = "No";
    }
    if(isset($_REQUEST["pregunta3.5"])){
        $_SESSION["respuesta3.5"] = $_REQUEST["pregunta3.5"];
    }else{
        $_SESSION["respuesta3.5"] = "No";
    }
    if(isset($_REQUEST["pregunta3.6"])){
        $_SESSION["respuesta3.6"] = $_REQUEST["pregunta3.6"];
    }else{
        $_SESSION["respuesta3.6"] = "No";
    }
    if(isset($_REQUEST["pregunta3.7"])){
        $_SESSION["respuesta3.7"] = $_REQUEST["pregunta3.7"];
    }else{
        $_SESSION["respuesta3.7"] = "No";
    }
    if(isset($_REQUEST["pregunta4"])){
        $_SESSION["respuesta4"] = $_REQUEST["pregunta4"];
    }
    if(isset($_REQUEST["pregunta5"])){
        $_SESSION["respuesta5"] = $_REQUEST["pregunta5"];
    }
    if(isset($_REQUEST["pregunta6"])){
        $_SESSION["respuesta6"] = $_REQUEST["pregunta6"];
    }
    if(isset($_REQUEST["pregunta7"])){
        $_SESSION["respuesta7"] = $_REQUEST["pregunta7"];
    }
    if(isset($_REQUEST["pregunta8.1"])){
        $_SESSION["respuesta8.1"] = $_REQUEST["pregunta8.1"];
    }else{
        $_SESSION["respuesta8.1"] = "No";
    }
    if(isset($_REQUEST["pregunta8.2"])){
        $_SESSION["respuesta8.2"] = $_REQUEST["pregunta8.2"];
    }else{
        $_SESSION["respuesta8.2"] = "No";
    }
    if(isset($_REQUEST["pregunta8.3"])){
        $_SESSION["respuesta8.3"] = $_REQUEST["pregunta8.3"];
    }else{
        $_SESSION["respuesta8.3"] = "No";
    }
    if(isset($_REQUEST["pregunta8.4"])){
        $_SESSION["respuesta8.4"] = $_REQUEST["pregunta8.4"];
    }else{
        $_SESSION["respuesta8.4"] = "No";
    }
    if(isset($_REQUEST["pregunta8.5"])){
        $_SESSION["respuesta8.5"] = $_REQUEST["pregunta8.5"];
    }else{
        $_SESSION["respuesta8.5"] = "No";
    }
    if(isset($_REQUEST["pregunta9"])){
        $_SESSION["respuesta9"] = $_REQUEST["pregunta9"];
    }
    
    //Cambiar lo que es pregunta por respuesta(recordar si más adelante añadimos algún otro easter egg o algo, después del $_SESSION va dentro [respuesta])

    //Verifica antes si todas las respuestas son la primera
    if($_SESSION["respuesta1"] == "Si" && $_SESSION["respuesta2"] == "2.1" && $_SESSION["respuesta3.1"] == "Si" && $_SESSION["respuesta4"] == "Si" 
        && $_SESSION["respuesta5"] == "5.1" && $_SESSION["respuesta6"] == "6.1" && $_SESSION["respuesta7"] == "Si" && $_SESSION["respuesta8.1"] == "Si" && $_SESSION["pregunta9"] == "Si"){
        
        


    }else{
        $raza[0] = 0;//Draconido
        $raza[1] = 0;//Elfo
        $raza[2] = 0;//Enano
        $raza[3] = 0;//Gnomo
        $raza[4] = 0;//Humano
        $raza[5] = 0;//Mediano
        $raza[6] = 0;//Semielfo
        $raza[7] = 0;//Semiorco
        $raza[8] = 0;//Tiflin

        //Cambiar lo que es pregunta por respuesta

        if($_SESSION["respuesta1"]=="Si"){
            $raza[0]++;
            $raza[1]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta1"]=="No"){
            $raza[2]++;
            $raza[3]++;
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
            $raza[7]++;
        }
        if($_SESSION["respuesta2"]=="2.1"){
            $raza[2]++;
            $raza[3]++;
        }
        if($_SESSION["respuesta2"]=="2.2"){
            $raza[1]++;
            $raza[3]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta2"]=="2.3"){
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta2"]=="2.4"){
            $raza[2]++;
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta2"]=="2.5"){
            $raza[0]++;
            $raza[1]++;
            $raza[3]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta3.1"]=="Si"){
            $raza[0]++;
            $raza[2]++;
            $raza[4]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta3.2"]=="Si"){
            $raza[2]++;
            $raza[3]++;
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta3.3"]=="Si"){
            $raza[0]++;
            $raza[1]++;
            $raza[2]++;
            $raza[4]++;
        }
        if($_SESSION["respuesta3.4"]=="Si"){
            $raza[0]++;
            $raza[3]++;
            $raza[4]++;
            $raza[5]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta3.5"]=="Si"){
            $raza[0]++;
            $raza[1]++;
            $raza[2]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta3.6"]=="Si"){
            $raza[0]++;
            $raza[1]++;
            $raza[3]++;
            $raza[6]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta3.7"]=="Si"){
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta4"]=="Si"){
            $raza[0]++;
            $raza[3]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta4"]=="No"){
            $raza[1]++;
            $raza[2]++;
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta5"]=="5.1"){
            $raza[0]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta5"]=="5.2"){
            $raza[4]++;
            $raza[5]++;
        }
        if($_SESSION["respuesta5"]=="5.3"){
            $raza[1]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta5"]=="5.4"){
            $raza[2]++;
            $raza[3]++;
        }
        if($_SESSION["respuesta5"]=="5.5"){
            $raza[4]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta6"]=="6.1"){
            $raza[0]++;
            $raza[1]++;
            $raza[2]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta6"]=="6.2"){
            $raza[3]++;
            $raza[4]++;
            $raza[5]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta7"]=="Si"){
            $raza[0]++;
            $raza[1]++;
            $raza[3]++;
            $raza[6]++;
            $raza[7]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta7"]=="No"){
            $raza[2]++;
            $raza[4]++;
            $raza[5]++;
        }
        if($_SESSION["respuesta8.1"]=="Si"){
            $raza[0]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta8.2"]=="Si"){
            $raza[2]++;
            $raza[7]++;
        }
        if($_SESSION["respuesta8.3"]=="Si"){
            $raza[0]++;
            $raza[4]++;
            $raza[5]++;
        }
        if($_SESSION["respuesta8.4"]=="Si"){
            $raza[1]++;
            $raza[6]++;
        }
        if($_SESSION["respuesta8.5"]=="Si"){
            $raza[1]++;
            $raza[3]++;
            $raza[6]++;
            $raza[8]++;
        }
        if($_SESSION["respuesta9"]=="Si"){
            $raza[0]++;
            $raza[4]++;
            $raza[6]++;
            $raza[7]++;
        }
        if($_SESSION["respuesta9"]=="No"){
            $raza[1]++;
            $raza[2]++;
            $raza[3]++;
            $raza[5]++;
            $raza[8]++;
        }

        //Elección de raza ganadora

        include "funciones.php";

        $razaGanadora = indiceElementoMayor($raza);

        if($razaGanadora == 0){
            $_SESSION["razaPersonaje"] = "dracónido";
        }else if($razaGanadora == 1){
            $_SESSION["razaPersonaje"] = "elfo";
        }else if($razaGanadora == 2){
            $_SESSION["razaPersonaje"] = "eneno";
        }else if($razaGanadora == 3){
            $_SESSION["razaPersonaje"] = "gnomo";
        }else if($razaGanadora == 4){
            $_SESSION["razaPersonaje"] = "humano";
        }else if($razaGanadora == 5){
            $_SESSION["razaPersonaje"] = "mediano";
        }else if($razaGanadora == 6){
            $_SESSION["razaPersonaje"] = "semielfo";
        }else if($razaGanadora == 7){
            $_SESSION["razaPersonaje"] = "semiorco";
        }else{
            $_SESSION["razaPersonaje"] = "tiflin";
        }
            

    }



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
        <input type="number" name="pregunta1C" min="1" max="30" value="1">

        <!-- Pregunta 2 -->
        <p>Elige el color con el que te sientas más identificado, <?php $_SESSION["nombrePersonaje"] ?>?</p>
        <input type="color" name="pregunta2C">
        
        <!-- Pregunta 3 -->
        <p>¿Cuántas aliados prefieres tener a tu lado en una batalla decisiva, <?php $_SESSION["nombrePersonaje"] ?>? (0-25)</p>
        <input type="range" name="pregunta3C" min="0" max="25" style="width: 500px;">

        <!-- Pregunta 4 -->
        <p>¿En qué fecha iniciarías tu aventura épica, <?php $_SESSION["nombrePersonaje"] ?>? (solo se evalúa el mes y el día)</p>
        <input type="date" name="pregunta4C" min="2025-01-01" max="2025-12-31">

        <br><br>
        <input type="submit" value="Conocer Clase">


    </form>
    
</body>
</html>