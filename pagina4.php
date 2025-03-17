<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 4</title>
</head>
<body>
    <?php
        session_start();
        echo "Definitavemnte eres un ".$_SESSION["razaPersonaje"]." ".$_SESSION["clasePersonaje"];

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
    <h1>Habilidades de Dungeons & Dragons</h1>
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


        <!-- Pregunta 3: Checkbox -->
        <?php
            echo "<p>Selecciona los adjetivos que mejor describen tu personalidad, ".$_SESSION["nombrePersonaje"]."</p>"
        ?>

        <form action="resultado.php" method="POST">
            <input type="checkbox" name="pregunta1.1H" value="Si"> Acrobacias
            <br>
            <input type="checkbox" name="pregunta1.2H" value="Si"> Trato con animales
            <br>
            <input type="checkbox" name="pregunta1.3H" value="Si"> Arcano
            <br>
            <input type="checkbox" name="pregunta1.4H" value="Si"> Atletismo
            <br>
            <input type="checkbox" name="pregunta1.5H" value="Si"> Engaño
            <br>
            <input type="checkbox" name="pregunta1.6H" value="Si"> Historia
            <br>
            <input type="checkbox" name="pregunta1.7H" value="Si"> Perspicacia
            <br>
            <input type="checkbox" name="pregunta1.8H" value="Si"> Intimidación
            <br>
            <input type="checkbox" name="pregunta1.9H" value="Si"> Investigación
            <br>
            <input type="checkbox" name="pregunta1.10H" value="Si"> Medicina
            <br>
            <input type="checkbox" name="pregunta1.11H" value="Si"> Naturaleza
            <br>
            <input type="checkbox" name="pregunta1.12H" value="Si"> Percepción
            <br>
            <input type="checkbox" name="pregunta1.13H" value="Si"> Interpretación
            <br>
            <input type="checkbox" name="pregunta1.14H" value="Si"> Persuasión
            <br>
            <input type="checkbox" name="pregunta1.15H" value="Si"> Religión
            <br>
            <input type="checkbox" name="pregunta1.16H" value="Si"> Truco Rumano
            <br>
            <input type="checkbox" name="pregunta1.17H" value="Si"> Sigilo
            <br>
            <input type="checkbox" name="pregunta1.18H" value="Si"> Supervivencia
        </form>
</body>
</html>