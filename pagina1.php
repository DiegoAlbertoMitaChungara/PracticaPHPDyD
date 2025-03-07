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
        <br><br>
        <strong>Dracónidos:</strong> Descendientes de dragones, se distinguen por su apariencia imponente, afinidad por el fuego y un linaje legendario.
        <br>
        <strong>Elfos:</strong> Seres longevos y elegantes, conectados con la magia y la naturaleza, que suelen habitar bosques encantados.
        <br>
        <strong>Enanos:</strong> Robustos y de gran resistencia, expertos en la forja y la minería, con un fuerte sentido de la tradición y el honor.
        <br>
        <strong>Gnomos:</strong> Curiosos e ingeniosos, conocidos por su inventiva y una sutil conexión con la magia, ideales para roles místicos.
        <br>
        <strong>Humanos:</strong> Versátiles y adaptables, capaces de destacarse en múltiples disciplinas y entornos, reflejando diversidad y equilibrio.
        <br>
        <strong>Medianos:</strong> De estatura pequeña pero llenos de energía, astucia y carisma, a menudo se destacan por su espíritu aventurero.
        <br>
        <strong>Semielfos:</strong> La perfecta fusión entre la gracia élfica y la adaptabilidad humana, ofreciendo un equilibrio entre tradición y versatilidad.
        <br>
        <strong>Semiorcos:</strong> Guerreros intensos y rudos, que combinan fuerza bruta con un espíritu desafiante y, a veces, una lucha interna con sus orígenes.
        <br>
        <strong>Tiflin:</strong> Con ascendencia infernal o dracónica, poseen un carisma enigmático y una conexión con lo místico y el fuego.
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
        <input type="radio" name="pregunta2" value="2.1" required> Las majestuosas montañas y profundos túneles
        <br>
        <input type="radio" name="pregunta2" value="2.2" required> Los bosques encantados, bañados por la luz de la luna
        <br>
        <input type="radio" name="pregunta2" value="2.3" required> Las bulliciosas calles y diversidad de una gran metrópolis
        <br>
        <input type="radio" name="pregunta2" value="2.4" required> Un vibrante mercado lleno de festivales y color
        <br>
        <input type="radio" name="pregunta2" value="2.5" required> Un rincón místico, donde la magia y lo oculto se funden

        <!-- Pregunta 3: Checkbox -->
        <?php
            echo "<p>Selecciona los adjetivos que mejor describen tu personalidad, ".$_SESSION["nombrePersonaje"]."</p>"
        ?>

        <input type="checkbox" name="pregunta3" value="3.1"> Valiente
        <br>
        <input type="checkbox" name="pregunta3" value="3.2"> Astuto
        <br>
        <input type="checkbox" name="pregunta3" value="3.3"> Sabio
        <br>
        <input type="checkbox" name="pregunta3" value="3.4"> Carismático
        <br>
        <input type="checkbox" name="pregunta3" value="3.5"> Resistente
        <br>
        <input type="checkbox" name="pregunta3" value="3.6"> Místico
        <br>
        <input type="checkbox" name="pregunta3" value="3.7"> Alegre


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

        <input type="radio" name="pregunta5" value="5.1" required> Una espada ancestral grabada en runas
        <br>
        <input type="radio" name="pregunta5" value="5.2" required> Un amuleto radiante que ilumina la oscuridad
        <br>
        <input type="radio" name="pregunta5" value="5.3" required> Un bastón cuyos fuegos internos parecen vivos
        <br>
        <input type="radio" name="pregunta5" value="5.4" required> Un curioso artefacto mecánico de intrincados engranajes
        <br>
        <input type="radio" name="pregunta5" value="5.5" required> Una capa que te permite fundirte con las sombras


        <!-- Pregunta 6: Radio -->
        <?php
            echo "<p>¿Qué valor te define más: la tradición y la herencia ancestral o la creatividad y el cambio constante, ".$_SESSION["nombrePersonaje"]."?</p>"
        ?>
        <input type="radio" name="pregunta6" value="6.1" required> La tradición (ideal para razas con fuerte legado)
        <br>
        <input type="radio" name="pregunta6" value="6.2" required> La innovación (ideal para razas versátiles)

            
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
        <input type="checkbox" name="pregunta8" value="8.1"> El ardor y la pasión del fuego
        <br>
        <input type="checkbox" name="pregunta8" value="8.2"> La solidez y seguridad de la tierra
        <br>
        <input type="checkbox" name="pregunta8" value="8.3"> La libertad y la amplitud del cielo
        <br>
        <input type="checkbox" name="pregunta8" value="8.4"> La calma y la profundidad del agua
        <br>
        <input type="checkbox" name="pregunta8" value="8.5"> Una energía mística que parece envolverlo todo

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
            
            

            //Verifica antes si todas las respuestas son la primera
            if($_SESSION["pregunta1"] == "Si" && $_SESSION["pregunta2"] == "2.1" && $_SESSION["pregunta3"] == "3.1" && $_SESSION["pregunta4"] == "Si" 
                && $_SESSION["pregunta5"] == "5.1" && $_SESSION["pregunta6"] == "6.1" && $_SESSION["pregunta7"] == "Si" && $_SESSION["pregunta8"] == "8.1" && $_SESSION["pregunta9"] == "Si"){
                
                


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

                if($_SESSION["pregunta1"]=="Si"){
                    $raza[0]++;
                    $raza[1]++;
                    $raza[8]++;
                }
                if($_SESSION["pregunta1"]=="No"){
                    $raza[2]++;
                    $raza[3]++;
                    $raza[4]++;
                    $raza[5]++;
                    $raza[6]++;
                    $raza[7]++;
                }
                if($_SESSION["pregunta2"]=="2.1"){
                    $raza[2]++;
                    $raza[3]++;
                }
                if($_SESSION["pregunta2"]=="2.2"){
                    $raza[2]++;
                    $raza[3]++;
                }

            }

            print_r($_SESSION);
        
        ?>


    </form>


</body>

</html>