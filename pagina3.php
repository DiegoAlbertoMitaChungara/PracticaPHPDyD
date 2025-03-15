<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<?php
    session_start();
    if(isset($_REQUEST["pregunta1C"])){
        $_SESSION["respuesta1Clase"] = $_REQUEST["pregunta1C"];
    }
    if(isset($_REQUEST["pregunta2C"])){
        $_SESSION["respuesta2Clase"] = $_REQUEST["pregunta2C"];
    }
    if(isset($_REQUEST["pregunta3C"])){
        $_SESSION["respuesta3Clase"] = $_REQUEST["pregunta3C"];
    }
    if(isset($_REQUEST["pregunta4C"])){
        $_SESSION["respuesta4Clase"] = $_REQUEST["pregunta4C"];
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
<body>

    <h1>Características de Dungeons & Dragons</h1>
    <p>
        En Dungeons & Dragons existen diversas características únicas. Algunas de las principales son:<br><br>
        <strong>Inteligencia:</strong> La Inteligencia evalúa la capacidad de razonamiento, aprendizaje y conocimiento. Esta característica es crucial para personajes que dependen del estudio, la resolución de acertijos y la memorización de información, como los magos. Un personaje con alta Inteligencia suele tener un amplio bagaje cultural y puede aprender idiomas, investigar y encontrar soluciones creativas a los problemas.
        <br>
        <strong>Fuerza:</strong> La Fuerza mide el poder físico y la capacidad de un personaje para realizar tareas que requieren esfuerzo bruto. Es esencial para actividades como levantar o empujar objetos pesados, romper barreras, y en combate, determina el daño que se inflige con armas cuerpo a cuerpo. Un personaje con alta Fuerza destacará en maniobras atléticas y en situaciones donde se requiera una gran potencia física.
        <br>
        <strong>Destreza:</strong> La Destreza representa la agilidad, coordinación, reflejos y equilibrio. Esta característica influye en la capacidad de esquivar ataques, ejecutar maniobras sigilosas y realizar tareas que requieran precisión manual, como desarmar trampas o robar. Además, un alto puntaje de Destreza mejora la iniciativa en combate y, en muchos casos, hace al personaje más difícil de golpear.
        <br>
        <strong>Constitución:</strong> La Constitución mide la resistencia física y la vitalidad. Es fundamental para determinar la cantidad de puntos de golpe de un personaje, lo que refleja su capacidad para resistir daños, enfermedades y fatiga. Una buena Constitución permite a los personajes mantenerse en pie durante largos combates y soportar situaciones extremas sin rendirse.
        <br>
        <strong>Sabiduría:</strong> La Sabiduría está vinculada a la percepción, intuición y conexión con el entorno. Es la base para detectar detalles sutiles, como trampas, señales del ambiente o el comportamiento de otros seres. Además, personajes como clérigos y druidas usan la Sabiduría para canalizar su magia, lo que la convierte en una característica clave en la toma de decisiones basadas en el instinto y el sentido común.
        <br>
        <strong>Carisma:</strong> El Carisma mide la fuerza de la personalidad, la capacidad de persuasión y el magnetismo personal. Un alto Carisma permite a los personajes liderar, inspirar y negociar de manera efectiva. Es vital para aquellas clases que se centran en la interacción social y en la magia basada en la fuerza de voluntad, como los bardos, hechiceros y paladines. Un personaje carismático puede influir en amigos y enemigos, moldeando situaciones a su favor mediante la diplomacia o la intimidación.
    </p>

    <form action="pagina4.php" method="post">
        <p>Generar estadísticas aleatorias</p>
        <input type="button" value="Generar" onclick="">
        <input type="submit" value="Enviar">
    </form>

    <p id="resultado"></p>

    <?php
        function generaEstadisticas(){
            for($i = 0; $i < 6; $i++){
                $estadisticas[$i] = rand(1,20);
            }

            /*
                En el array de estadísticas: (valor-índice)
                Inteligencia - 0
                Fuerza - 1
                Destreza - 2
                Constitución - 3
                Sabiduría - 4
                Carisma - 5
            */

            $raza = $_SESSION["razaPersonaje"];

            if($raza == "dracónido"){
                $estadisticas[5]+=2;
                $estadisticas[1]++;
            }else if($raza == "elfo"){
                $estadisticas[2]+=2;
                $estadisticas[4]++;
            }else if($raza == "enano"){
                $estadisticas[3]+=2;
                $estadisticas[4]++;
            }else if($raza == "gnomo"){
                $estadisticas[0]+=2;
                $estadisticas[3]++;
            }else if($raza == "humano"){
                $estadisticas[0]++;
                $estadisticas[1]++;
                $estadisticas[2]++;
                $estadisticas[3]++;
                $estadisticas[4]++;
                $estadisticas[5]++;
            }else if($raza == "mediano"){
                $estadisticas[2]+=2;
                $estadisticas[3]++;
            }else if($raza == "semielfo"){
                $estadisticas[5]+=2;
                $estadisticas[2]++;
                $estadisticas[4]++;
            }
            else if($raza == "semiorco"){
                $estadisticas[1]+=2;
                $estadisticas[3]++;
            }else{
                $estadisticas[5]+=2;
                $estadisticas[0]++;
            }

            return $estadisticas;
        }


    ?>

</body>
</html>