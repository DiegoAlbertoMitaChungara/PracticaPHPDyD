<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>

<?php

    session_start();

    if (isset($_REQUEST["nombre"])) {
        setcookie("nombreInput", htmlspecialchars(trim(string: strip_tags($_REQUEST["nombre"]))));
        $_SESSION["nombrePersonaje"] = htmlspecialchars(trim(string: strip_tags($_REQUEST["nombre"])));
    } else {
        echo "No se ha asignado nombre";
    }

?>

<body>


    <h1>Razas de Dungeons & Dragons</h1>
    <p>
        En Dungeons & Dragons existen diversas razas con características únicas. Algunas de las principales son:
        <strong>Humanos</strong>, <strong>Elfos</strong>, <strong>Enanos</strong>, <strong>Medianos</strong>, <strong>Gnomos</strong>,
        <strong>Tieflings</strong>, <strong>Dragonborn</strong> y <strong>Semielfos</strong>.
    </p>

    <h2>Formulario de Creación de Personaje</h2>
    <form method="POST" action="pagina1.php">
        <!-- Pregunta 1: Select -->
        <?php
            echo "<p>¿Sientes que en tu interior arde una llama ancestral como si llevaras la fuerza de un linaje mítico, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <select name="pregunta1" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>
        <!-- 
            <input type="radio" name="pregunta_radio" value="Si" required> Sí
        <input type="radio" name="pregunta_radio" value="No" required> No
        -->
        
        <!-- Pregunta 2: Radio -->
     
        <?php
            echo "<p>Si pudieras elegir el lugar ideal para vivir, ¿cuál te resultaría más inspirador, ".$_SESSION["nombrePersonaje"]."?</p>"; 
        ?>
        <input type="radio" name="pregunta2" value="Las majestuosas montañas y profundos túneles" required> Las majestuosas montañas y profundos túneles
        <br>
        <input type="radio" name="pregunta2" value="Los bosques encantados, bañados por la luz de la luna" required> Los bosques encantados, bañados por la luz de la luna
        <br>
        <input type="radio" name="pregunta2" value="Las bulliciosas calles y diversidad de una gran metrópolis" required> Las bulliciosas calles y diversidad de una gran metrópolis
        <br>
        <input type="radio" name="pregunta2" value="Un vibrante mercado lleno de festivales y color" required> Un vibrante mercado lleno de festivales y color
        <br>
        <input type="radio" name="pregunta2" value="Un rincón místico, donde la magia y lo oculto se funden" required> Un rincón místico, donde la magia y lo oculto se funden

        <!-- Pregunta 3: Checkbox -->
        <?php
            echo "<p>Selecciona los adjetivos que mejor describen tu personalidad, ".$_SESSION["nombrePersonaje"]."</p>"
        ?>

        <input type="checkbox" name="pregunta3" value="Valiente"> Valiente
        <br>
        <input type="checkbox" name="pregunta3" value="Astuto"> Astuto
        <br>
        <input type="checkbox" name="pregunta3" value="Sabio"> Sabio
        <br>
        <input type="checkbox" name="pregunta3" value="Carismático"> Carismático
        <br>
        <input type="checkbox" name="pregunta3" value="Resistente"> Resistente
        <br>
        <input type="checkbox" name="pregunta3" value="Místico"> Místico
        <br>
        <input type="checkbox" name="pregunta3" value="Alegre"> Alegre


        <!-- Pregunta 4: Select -->
        <?php
            echo "<p>¿Te sientes cómodo/a desafiando las normas y aventurándote en lo desconocido, incluso si eso significa romper moldes tradicionales,".$_SESSION["nombrePersonaje"]."?</p>"
        ?>

        <select name="pregunta4" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        
        <!-- Pregunta 5: Radio -->
        <?php
            echo "<p>Selecciona el objeto mágico con el que soñarías tener para emprender tus aventuras, ".$_SESSION["nombrePersonaje"]."</p>"
        ?>

        <input type="radio" name="pregunta5" value="Una espada ancestral grabada en runas" required> Una espada ancestral grabada en runas
        <br>
        <input type="radio" name="pregunta5" value="Un amuleto radiante que ilumina la oscuridad" required> Un amuleto radiante que ilumina la oscuridad
        <br>
        <input type="radio" name="pregunta5" value="Un bastón cuyos fuegos internos parecen vivos" required> Un bastón cuyos fuegos internos parecen vivos
        <br>
        <input type="radio" name="pregunta5" value="Un curioso artefacto mecánico de intrincados engranajes" required> Un curioso artefacto mecánico de intrincados engranajes
        <br>
        <input type="radio" name="pregunta5" value="Una capa que te permite fundirte con las sombras" required> Una capa que te permite fundirte con las sombras


        <!-- Pregunta 6: Radio -->
        <?php
            echo "<p>¿Qué valor te define más: la tradición y la herencia ancestral o la creatividad y el cambio constante, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <input type="radio" name="pregunta6" value="La tradición (ideal para razas con fuerte legado)" required> La tradición (ideal para razas con fuerte legado)
        <br>
        <input type="radio" name="pregunta6" value="La innovación (ideal para razas versátiles)" required> La innovación (ideal para razas versátiles)

            
        <!-- Pregunta 7: Select -->
        <?php
            echo "<p>¿Has sentido alguna vez una conexión especial con criaturas míticas o seres de leyenda, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <select name="pregunta7" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <!-- Pregunta 8: Checkbox -->
        <?php
            echo "<p>¿Qué elementos resuenan más contigo en el día a día, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <input type="checkbox" name="pregunta8" value="El ardor y la pasión del fuego"> El ardor y la pasión del fuego
        <br>
        <input type="checkbox" name="pregunta8" value="La solidez y seguridad de la tierra"> La solidez y seguridad de la tierra
        <br>
        <input type="checkbox" name="pregunta8" value="La libertad y la amplitud del cielo"> La libertad y la amplitud del cielo
        <br>
        <input type="checkbox" name="pregunta8" value="La calma y la profundidad del agua"> La calma y la profundidad del agua
        <br>
        <input type="checkbox" name="pregunta8" value="Una energía mística que parece envolverlo todo"> Una energía mística que parece envolverlo todo

        <!-- Pregunta 9: Select -->
        <?php
            echo "<p>¿Prefieres destacar en medio de la multitud, brillando con luz propia, o conservar un perfil discreto y reservado, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <select name="pregunta9" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <br><br>
        <input type="submit" value="Crear Personaje">

        <?php 


            
            if(isset($_REQUEST["pregunta1"])) {
                $_SESSION["respuesta1"] = $_REQUEST["pregunta1"];
            }
            if(isset($_REQUEST["pregunta2"])){
                $_SESSION["respuesta2"] = $_REQUEST["pregunta2"];
            }
            if(isset($_REQUEST["pregunta3"])){
                $_SESSION["respuesta3"] = $_REQUEST["pregunta3"];
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
            if(isset($_REQUEST["pregunta8"])){
                $_SESSION["respuesta8"] = $_REQUEST["pregunta8"];
            }
            if(isset($_REQUEST["pregunta9"])){
                $_SESSION["respuesta9"] = $_REQUEST["pregunta9"];
            }
            
            
            /*
            if(isset($_SESSION["respuesta1"]) == "Si" && isset($_SESSION["respuesta2"]) == "Si" && isset($_SESSION["respuesta3"]) == "Si"){
                echo"Las tres son Sí";
            }else if(isset($_SESSION["respuesta1"]) == "Si" && isset($_SESSION["respuesta2"]) == "No" && isset($_SESSION["respuesta3"]) == "Si"){
                echo"Primera -> Sí Segunda -> No Tercera -> Sí";
            }else{
                echo "Error";
            }

            */

            print_r($_SESSION);
        
        ?>


    </form>


</body>

</html>