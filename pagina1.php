<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina1</title>
</head>

<body>
    <?php

        session_start();
        if (isset($_REQUEST["nombre"])) {
            setcookie("nombrePersonaje", $_REQUEST["nombre"]);
        } else {
            echo "No se ha asignado nombre";
        }

    ?>

    <h1>Razas de Dungeons & Dragons</h1>
    <p>
        En Dungeons & Dragons existen diversas razas con características únicas. Algunas de las principales son:
        <strong>Humanos</strong>, <strong>Elfos</strong>, <strong>Enanos</strong>, <strong>Medianos</strong>, <strong>Gnomos</strong>,
        <strong>Tieflings</strong>, <strong>Dragonborn</strong> y <strong>Semielfos</strong>.
    </p>

    <h2>Formulario de Creación de Personaje</h2>
    <form method="POST" action="pagina1.php">
        <!-- Pregunta 1: Radio Button -->
        <p>¿Te atrae la magia? (Radio Button)</p>
        <input type="radio" name="pregunta_radio" value="Si" required> Sí
        <input type="radio" name="pregunta_radio" value="No" required> No

        <!-- Pregunta 2: Checkbox -->
        <p>¿Te sientes conectado con la naturaleza? (Checkbox)<br>
            (Marca la casilla para responder "Sí"; si no se marca se considerará "No")</p>
        <!-- Campo oculto para garantizar que siempre se envíe un valor -->
        <input type="hidden" name="pregunta_checkbox" value="No">
        <input type="checkbox" name="pregunta_checkbox" value="Si">

        <!-- Pregunta 3: Select -->
        <p>¿Eres aventurero? (Select)</p>
        <select name="pregunta_select" required>
            <option value="">-- Selecciona una opción --</option>
            <option value="Si">Sí</option>
            <option value="No">No</option>
        </select>

        <br><br>
        <input type="submit" value="Crear Personaje">

        <?php
            if(isset($_REQUEST["pregunta_radio"])) {
                $_SESSION["respuesta1"] = $_REQUEST["pregunta_radio"];
            }
            if(isset($_REQUEST["pregunta_checkbox"])){
                $_SESSION["respuesta2"] = $_REQUEST["pregunta_checkbox"];
            }
            if(isset($_REQUEST["pregunta_select"])){
                $_SESSION["respuesta3"] = $_REQUEST["pregunta_select"];
            }
            
            if(isset($_SESSION["respuesta1"]) == "Si" && isset($_SESSION["respuesta2"]) == "Si" && isset($_SESSION["respuesta3"]) == "Si"){
                echo"Las tres son Sí";
            }else if(isset($_SESSION["respuesta1"]) == "Si" && isset($_SESSION["respuesta2"]) == "No" && isset($_SESSION["respuesta3"]) == "Si"){
                echo"Primera -> Sí Segunda -> No Tercera -> Sí";
            }else{
                echo "Error";
            }

            session_destroy();
        
        ?>


    </form>


</body>

</html>