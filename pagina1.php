<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
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
    <?php
        echo "¡Hola, ".$_SESSION["nombrePersonaje"]."!";
    ?>
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
    <form action="pagina2.php" method="POST" onsubmit="verificaCheckboxes(event); verificaCheckboxes2(event)">
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
        <input type="radio" name="pregunta2" value="2.4" required> Un vibrante mercado especializado en compra-venta de todo tipo de utensilios
        <br>
        <input type="radio" name="pregunta2" value="2.5" required> Un rincón místico, donde la magia y lo oculto se funden

        <!-- Pregunta 3: Checkbox -->
        <?php
            echo "<p>Selecciona los adjetivos que mejor describen tu personalidad, ".$_SESSION["nombrePersonaje"]."</p>"
        ?>

        <input type="checkbox" name="pregunta3.1" class="checkboxes" value="Si"> Valiente
        <br>
        <input type="checkbox" name="pregunta3.2" class="checkboxes" value="Si"> Astuto
        <br>
        <input type="checkbox" name="pregunta3.3" class="checkboxes" value="Si"> Sabio
        <br>
        <input type="checkbox" name="pregunta3.4" class="checkboxes" value="Si"> Carismático
        <br>
        <input type="checkbox" name="pregunta3.5" class="checkboxes" value="Si"> Resistente
        <br>
        <input type="checkbox" name="pregunta3.6" class="checkboxes" value="Si"> Místico
        <br>
        <input type="checkbox" name="pregunta3.7" class="checkboxes" value="Si"> Alegre


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
        <input type="radio" name="pregunta5" value="5.2" required> Un amuleto radiante que protege del mal
        <br>
        <input type="radio" name="pregunta5" value="5.3" required> Un bastón obtenido de árboles sagrados
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
        <input type="checkbox" name="pregunta8.1" class="checkboxes2" value="Si"> El ardor y la pasión del fuego
        <br>
        <input type="checkbox" name="pregunta8.2" class="checkboxes2" value="Si"> La solidez y seguridad de la tierra
        <br>
        <input type="checkbox" name="pregunta8.3" class="checkboxes2" value="Si"> La libertad y la amplitud del cielo
        <br>
        <input type="checkbox" name="pregunta8.4" class="checkboxes2" value="Si"> La calma y la profundidad del agua
        <br>
        <input type="checkbox" name="pregunta8.5" class="checkboxes2" value="Si"> Una energía mística que parece envolverlo todo

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

            $errors = [];
            
            // Validar Pregunta 1
            if (empty($_POST["respuesta1"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 1.";
            }
            // Validar Pregunta 2
            if (empty($_POST["respuesta2"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 2.";
            }
            // Validar Pregunta 3
            if (
                empty($_POST["respuesta3.1"]) &&
                empty($_POST["respuesta3.2"]) &&
                empty($_POST["respuesta3.3"]) &&
                empty($_POST["respuesta3.4"]) &&
                empty($_POST["respuesta3.5"]) &&
                empty($_POST["respuesta3.6"]) &&
                empty($_POST["respuesta3.7"])
            ) {
                $errors[] = "Debes seleccionar al menos una opción en la Pregunta 3.";
            }
            // Validar Pregunta 4
            if (empty($_POST["respuesta4"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 4.";
            }
            // Validar Pregunta 5
            if (empty($_POST["respuesta5"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 5.";
            }
            // Validar Pregunta 6
            if (empty($_POST["respuesta6"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 6.";
            }
            // Validar Pregunta 7
            if (empty($_POST["respuesta7"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 7.";
            }
            // Validar Pregunta 8
            if (
                empty($_POST["respuesta8.1"]) &&
                empty($_POST["respuesta8.2"]) &&
                empty($_POST["respuesta8.3"]) &&
                empty($_POST["respuesta8.4"]) &&
                empty($_POST["respuesta8.5"])
            ) {
                $errors[] = "Debes seleccionar al menos una opción en la Pregunta 8.";
            }
            // Validar Pregunta 9
            if (empty($_POST["respuesta9"])) {
                $errors[] = "Debes seleccionar una opción para la Pregunta 9.";
            }
        
        ?>
        <script>
            function verificaCheckboxes(evento){
                const inputs = document.querySelectorAll(".checkboxes:checked");

                if(inputs.length == 0){
                    alert("Por favor seleccione al menos una opción en los checkboxes de la pregunta 3");
                    evento.preventDefault();
                }
            }

            function verificaCheckboxes2(evento){
                const inputs = document.querySelectorAll(".checkboxes2:checked");

                if(inputs.length == 0){
                    alert("Por favor seleccione al menos una opción en los checkboxes de la pregunta 8");
                    evento.preventDefault();
                }
            }

        </script>


    </form>


</body>

</html>