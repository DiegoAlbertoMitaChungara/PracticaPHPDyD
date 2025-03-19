<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #titulo{
            height: 150px;
            border: 2px solid black;
            border-radius: 15px;
            text-align: center;
            align-content: center;
            background-color: slateblue;
        }
        #formulario{
            padding: 2%;
            border: 2px solid black;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: lightgreen;
        }
    </style>
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
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6" id="titulo">
            <h1>Razas de Dungeons & Dragons</h1>
        </div>
        <div class="col-3"></div>
    </div>
    <div class="row">
        <div class="col-3">


        </div>
        <div class="col-6" id="formulario">
            <p>¡Hola, <?php echo $_SESSION["nombrePersonaje"]?>!</p>
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
                <div class="mb-3">
                    <label>¿Sientes que en tu interior arde una llama ancestral como si llevaras la fuerza de un linaje mítico, <?php echo $_SESSION["nombrePersonaje"]?>?</label>
                    <select name="pregunta1" class="form-select" required>
                        <option value="">-- Selecciona una opción --</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- Pregunta 2: Radio -->
                <div class="mb-3">
                    <label>Si pudieras elegir el lugar ideal para vivir, ¿cuál te resultaría más inspirador, <?php echo $_SESSION["nombrePersonaje"]?>?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2.1" required>
                        <label class="form-check-label">
                            Las majestuosas montañas y profundos túneles
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2.2" required>
                        <label class="form-check-label">
                            Los bosques encantados, bañados por la luz de la luna
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2.3" required>
                        <label class="form-check-label">
                            Las bulliciosas calles y diversidad de una gran metrópolis
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2.4" required>
                        <label class="form-check-label">
                            Un vibrante mercado especializado en compra-venta de todo tipo de utensilios
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta2" value="2.5" required>
                        <label class="form-check-label">
                            Un rincón místico, donde la magia y lo oculto se funden
                        </label>
                    </div>
                </div>

                <!-- Pregunta 3: Checkbox -->
                <div class="mb-3" id="checkboxes">
                    <label>Selecciona los adjetivos que mejor describen tu personalidad, <?php echo $_SESSION["nombrePersonaje"]?></label>

                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.1" value="Si">
                        <label class="form-check-label">
                            Valiente
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.2" value="Si">
                        <label class="form-check-label">
                            Astuto
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.3" value="Si">
                        <label class="form-check-label">
                            Sabio
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.4" value="Si">
                        <label class="form-check-label">
                            Carismático
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.5" value="Si">
                        <label class="form-check-label">
                            Resistente
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.6" value="Si">
                        <label class="form-check-label">
                            Místico
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes" type="checkbox" name="pregunta3.7" value="Si">
                        <label class="form-check-label">
                            Alegre
                        </label>
                    </div>
                </div>

                <!-- Pregunta 4: Select -->
                <div class="mb-3">
                    <label>¿Te sientes cómodo/a desafiando las normas y aventurándote en lo desconocido, incluso si eso significa romper moldes tradicionales, <?php echo $_SESSION["nombrePersonaje"]?>?</label>
                    <select name="pregunta4" class="form-select" required>
                        <option value="">-- Selecciona una opción --</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- Pregunta 5: Radio -->
                <div class="mb-3">
                    <label>Selecciona el objeto mágico con el que soñarías tener para emprender tus aventuras, <?php echo $_SESSION["nombrePersonaje"]?></label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5.1" required>
                        <label class="form-check-label">
                            Una espada ancestral grabada en runas
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5.2" required>
                        <label class="form-check-label">
                            Un amuleto radiante que protege del mal
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5.3" required>
                        <label class="form-check-label">
                            Un bastón obtenido de árboles sagrados
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5.4" required>
                        <label class="form-check-label">
                            Un curioso artefacto mecánico de intrincados engranajes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta5" value="5.5" required>
                        <label class="form-check-label">
                            Una capa que te permite fundirte con las sombras
                        </label>
                    </div>
                </div>

                <!-- Pregunta 6: Radio -->
                <div class="mb-3">
                    <label>¿Qué valor te define más: la tradición y la herencia ancestral o la creatividad y el cambio constante, <?php echo $_SESSION["nombrePersonaje"]?>?</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" value="6.1" required>
                        <label class="form-check-label">
                            La tradición (ideal para razas con fuerte legado)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="pregunta6" value="6.2" required>
                        <label class="form-check-label">
                            La innovación (ideal para razas versátiles)
                        </label>
                    </div>

                </div>

                <!-- Pregunta 7: Select -->
                <div class="mb-3">
                    <label>¿Has sentido alguna vez una conexión especial con criaturas míticas o seres de leyenda, <?php echo $_SESSION["nombrePersonaje"]?>?</label>
                    <select name="pregunta7" class="form-select" required>
                        <option value="">-- Selecciona una opción --</option>
                        <option value="Si">Sí</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <!-- Pregunta 8: Checkbox -->
                <div class="mb-3" id="checkboxes2">
                    <label>¿Qué elementos resuenan más contigo en el día a día, <?php echo $_SESSION["nombrePersonaje"]?>?</label>

                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes2" type="checkbox" name="pregunta8.1" value="Si">
                        <label class="form-check-label">
                            El ardor y la pasión del fuego
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes2" type="checkbox" name="pregunta8.2" value="Si">
                        <label class="form-check-label">
                            La solidez y seguridad de la tierra
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes2" type="checkbox" name="pregunta8.3" value="Si">
                        <label class="form-check-label">
                            La libertad y la amplitud del cielo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes2" type="checkbox" name="pregunta8.4" value="Si">
                        <label class="form-check-label">
                            La calma y la profundidad del agua
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="checkboxes2" type="checkbox" name="pregunta8.5" value="Si">
                        <label class="form-check-label">
                            Una energía mística que parece envolverlo todo
                        </label>
                    </div>
                </div>

                <!-- Pregunta 9: Select -->
                <div class="mb-3">
                    <label>¿Prefieres destacar en medio de la multitud, brillando con luz propia, o conservar un perfil discreto y reservado, <?php echo $_SESSION["nombrePersonaje"]?>?</label>
                    <select name="pregunta9" class="form-select" required>
                        <option value="">-- Selecciona una opción --</option>
                        <option value="Si">Prefiero brillar</option>
                        <option value="No">Prefiero ser discreto y reservado</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Conocer raza</button>
            </form>
        </div>
        <div class="col-3">


        </div>
    </div>




    <script>
        function verificaCheckboxes(evento){
            const inputs = document.querySelectorAll("#checkboxes .form-check-input:checked");

                //document.querySelectorAll("#checkboxes .form-check-input:checked") --> agrupa todos los elementos que tengan la clase "form-check-input" que hayan sido seleccionados (":checked") DENTRO del elemento con el id "checkboxes"

            if(inputs.length == 0){ //Si no ha seleccionado ninguna opción
                alert("Por favor seleccione al menos una opción en los checkboxes de la pregunta 3");
                evento.preventDefault(); //este método impide el envío del formulario
            }
        }

        function verificaCheckboxes2(evento){
            const inputs = document.querySelectorAll("#checkboxes2 .form-check-input:checked");

                //document.querySelectorAll("#checkboxes2 .form-check-input:checked") --> agrupa todos los elementos que tengan la clase "form-check-input" que hayan sido seleccionados (":checked") DENTRO del elemento con el id "checkboxes2"

            if(inputs.length == 0){ //Si no ha seleccionado ninguna opción
                alert("Por favor seleccione al menos una opción en los checkboxes de la pregunta 8");
                evento.preventDefault(); //este método impide el envío del formulario
            }
        }

    </script>


</body>

</html>