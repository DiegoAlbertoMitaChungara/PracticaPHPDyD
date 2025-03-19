<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #titulo{
            height: 150px;
            border: 2px solid black;
            border-radius: 15px;
            text-align: center;
            align-content: center;
        }
        #formulario{
            padding: 2%;
            border: 2px solid black;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<?php
    session_start();

    //Asignamos las estadísticas generadas aleatoriamente en pagina3.php y las guardamos en un array asociativo ($estadistica)     

    if(isset($_REQUEST["carInteligencia"])){
        $estadisticas["Inteligencia"] = $_REQUEST["carInteligencia"];
    }
    if(isset($_REQUEST["carFuerza"])){
        $estadisticas["Fuerza"] = $_REQUEST["carFuerza"];
    }
    if(isset($_REQUEST["carDestreza"])){
        $estadisticas["Destreza"] = $_REQUEST["carDestreza"];
    }
    if(isset($_REQUEST["carConstitucion"])){
        $estadisticas["Constitucion"] = $_REQUEST["carConstitucion"];
    }
    if(isset($_REQUEST["carSabiduria"])){
        $estadisticas["Sabiduria"] = $_REQUEST["carSabiduria"];
    }
    if(isset($_REQUEST["carCarisma"])){
        $estadisticas["Carisma"] = $_REQUEST["carCarisma"];
    }


    //Asignación de puntos de carcaterística extra según raza
    $raza = $_SESSION["razaPersonaje"]; 

    if($raza == "dracónido"){
        $estadisticas["Carisma"]+=2;
        $estadisticas["Fuerza"]++;
    }else if($raza == "elfo"){
        $estadisticas["Destreza"]+=2;
        $estadisticas["Sabiduria"]++;
    }else if($raza == "enano"){
        $estadisticas["Constitucion"]+=2;
        $estadisticas["Sabiduria"]++;
    }else if($raza == "gnomo"){
        $estadisticas["Inteligencia"]+=2;
        $estadisticas["Constitucion"]++;
    }else if($raza == "humano"){
        $estadisticas["Inteligencia"]++;
        $estadisticas["Fuerza"]++;
        $estadisticas["Destreza"]++;
        $estadisticas["Constitucion"]++;
        $estadisticas["Sabiduria"]++;
        $estadisticas["Carisma"]++;
    }else if($raza == "mediano"){
        $estadisticas["Destreza"]+=2;
        $estadisticas["Constitucion"]++;
    }else if($raza == "semielfo"){
        $estadisticas["Carisma"]+=2;
        $estadisticas["Destreza"]++;
        $estadisticas["Sabiduria"]++;
    }
    else if($raza == "semiorco"){
        $estadisticas["Fuerza"]+=2;
        $estadisticas["Constitucion"]++;
    }else{
        $estadisticas["Carisma"]+=2;
        $estadisticas["Inteligencia"]++;
    }

    //Asignación de puntos de característica extra según la clase
    $clase = $_SESSION["clasePersonaje"];

    if($clase == "barbaro"){
        $estadisticas["Fuerza"]++;
        $estadisticas["Constitucion"]++;

    }else if($clase == "bardo"){
        $estadisticas["Carisma"]++;

    }else if($clase == "brujo"){
        $estadisticas["Carisma"]++;

    }else if($clase == "clerigo"){
        $estadisticas["Sabiduria"]++;

    }else if($clase == "druida"){
        $estadisticas["Sabiduria"]++;

    }else if($clase == "explorador"){
        $estadisticas["Destreza"]++;
        $estadisticas["Sabiduria"]++;

    }else if($clase == "guerrero"){
        $estadisticas["Fuerza"]++;

        $estadisticas["Constitucion"]++;

    }else if($clase == "hechicero"){
        $estadisticas["Carisma"]++;

    }else if($clase == "mago"){
        $estadisticas["Inteligencia"]++;

    }else if($clase == "monje"){
        $estadisticas["Destreza"]++;
        $estadisticas["Sabiduria"]++;

    }else if($clase == "paladin"){
        $estadisticas["Fuerza"]++;
        $estadisticas["Carisma"]++;

    }else{
        $estadisticas["Destreza"]++;
    }
    

    $_SESSION["puntosInteligencia"] = $estadisticas["Inteligencia"];
    $_SESSION["puntosFuerza"] = $estadisticas["Fuerza"];
    $_SESSION["puntosDestreza"] = $estadisticas["Destreza"];
    $_SESSION["puntosConstitucion"] = $estadisticas["Constitucion"];
    $_SESSION["puntosSabiduria"] = $estadisticas["Sabiduria"];
    $_SESSION["puntosCarisma"] = $estadisticas["Carisma"];

?>
<body>
    <div class="row">
        <div class="col-3"></div>
            <div class="col-6" id="titulo">
                <h1>Habilidades de Dungeons & Dragons</h1>
            </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6" id="formulario">
            <p>Definitivamente has nacido para ser un <?php echo $_SESSION["razaPersonaje"]." ".$_SESSION["clasePersonaje"]?></p>
            <p>
                En Dungeons & Dragons existen diversas habilidades únicas. Algunas de las principales son:
                <br><br>
                <strong>Acrobacias (Destreza):</strong> Permite realizar maniobras ágiles, saltos y equilibrarse en situaciones difíciles.
                <br>
                <strong>Trato con animales (Sabiduría):</strong> Ayuda a calmar, entrenar o interpretar el comportamiento de animales.
                <br>
                <strong>Arcano (Inteligencia):</strong> Conocer secretos mágicos, entender símbolos y tradiciones místicas, y recordar detalles sobre hechizos y teorías arcanas.
                <br>
                <strong>Atletismo (Fuerza):</strong> Es útil para actividades físicas como escalar, nadar, saltar o empujar objetos pesados.
                <br>
                <strong>Engaño (Carisma):</strong> Permite mentir, disfrazarse o manipular a otros mediante el habla.
                <br>
                <strong>Historia (Inteligencia):</strong> Facilita recordar eventos, leyendas y conocimientos sobre culturas y civilizaciones antiguas.
                <br>
                <strong>Perspicacia (Sabiduría):</strong> Te ayuda a detectar mentiras, leer las intenciones y emociones de otras personas.
                <br>
                <strong>Intimidación (Carisma):</strong> Se usa para asustar o coaccionar a otros, aprovechando la fuerza de tu presencia o palabras.
                <br>
                <strong>Investigación (Inteligencia):</strong> Permite encontrar pistas, analizar detalles en una escena o examinar documentos en busca de información oculta.
                <br>
                <strong>Medicina (Sabiduría):</strong> Ayuda a diagnosticar, tratar heridas y reconocer enfermedades o venenos.
                <br>
                <strong>Naturaleza (Inteligencia):</strong> Conocer el entorno natural, identificar flora, fauna y fenómenos meteorológicos o geográficos.
                <br>
                <strong>Percepción (Sabiduría):</strong> Fundamental para notar detalles sutiles, detectar peligros o escuchar a escondidas.
                <br>
                <strong>Interpretación (Carisma):</strong> Se emplea para actuar, cantar o entretener, ya sea en público o para transmitir emociones.
                <br>
                <strong>Persuasión (Carisma):</strong> Permite convencer, negociar o influir en otros a través del diálogo.
                <br>
                <strong>Religión (Inteligencia):</strong> Conocer las doctrinas, mitos y tradiciones de diferentes deidades y cultos.
                <br>
                <strong>Truco Rumano (Destreza):</strong> Esencial para realizar trucos, robar objetos sin ser notado o manipular objetos pequeños con destreza.
                <br>
                <strong>Sigilo (Destreza):</strong> Facilita moverse sin ser detectado, ideal para infiltraciones o emboscadas.
                <br>
                <strong>Supervivencia (Sabiduría):</strong> Ayuda a orientarse en la naturaleza, rastrear criaturas y encontrar recursos en entornos salvajes.
            </p>


            <!-- Pregunta 1: Checkbox -->

            <form action="resultado.php" method="POST" onsubmit="verificaCheckboxes(event)">
                <div class="mb-3" id="checkboxes">
                <label>Selecciona las habilidades que mejor describen tu personalidad, <?php echo $_SESSION["nombrePersonaje"]?></label>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_1" value="Si">
                        <label class="form-check-label">
                            Acrobacias
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_2" value="Si">
                        <label class="form-check-label">
                            Trato con animales
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_3" value="Si">
                        <label class="form-check-label">
                            Arcano
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_4" value="Si">
                        <label class="form-check-label">
                            Atletismo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_5" value="Si">
                        <label class="form-check-label">
                            Engaño
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_6" value="Si">
                        <label class="form-check-label">
                            Historia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_7" value="Si">
                        <label class="form-check-label">
                            Perspicacia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_8" value="Si">
                        <label class="form-check-label">
                            Intimidación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_9" value="Si">
                        <label class="form-check-label">
                            Investigación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_10" value="Si">
                        <label class="form-check-label">
                            Medicina
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_11" value="Si">
                        <label class="form-check-label">
                            Naturaleza
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_12" value="Si">
                        <label class="form-check-label">
                            Percepción
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_13" value="Si">
                        <label class="form-check-label">
                            Interpretación
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_14" value="Si">
                        <label class="form-check-label">
                            Persuasión
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_15" value="Si">
                        <label class="form-check-label">
                            Religión
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_16" value="Si">
                        <label class="form-check-label">
                            Truco Rumano
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_17" value="Si">
                        <label class="form-check-label">
                            Sigilo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="pregunta1_18" value="Si">
                        <label class="form-check-label">
                            Supervivencia
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear Personaje</button>
            </form>


        </div>
        <div class="col-3">

        </div>
    </div>
    
    
        

    <script>
        function verificaCheckboxes(evento){
            const inputs = document.querySelectorAll("#checkboxes .form-check-input:checked");

            if(inputs.length < 4 || inputs.length > 8){ 
                alert("Por favor seleccione entre 4 y 8 opciones");
                evento.preventDefault(); 
            }
        }

    </script>
</body>
</html>