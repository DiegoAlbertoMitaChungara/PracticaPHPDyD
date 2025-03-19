<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
                text-align: center;
                font-family: Arial, sans-serif;
        }
        th {
            background-color: slateblue !important;
        }
        td {
            background-color: lightgreen !important;
        }
    </style>
</head>

<?php
    session_start();

    if(isset($_REQUEST["pregunta1_1"])){
        $_SESSION["respuesta1Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta1Habilidad"] = "No";
    }

    if(isset($_REQUEST["pregunta1_2"])){
        $_SESSION["respuesta2Habilidad"] = $_REQUEST["pregunta1_2"];
    }else{
        $_SESSION["respuesta2Habilidad"] = "No";
    }

    if(isset($_REQUEST["pregunta1_3"])){
        $_SESSION["respuesta3Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta3Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_4"])){
        $_SESSION["respuesta4Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta4Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_5"])){
        $_SESSION["respuesta5Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta5Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_6"])){
        $_SESSION["respuesta6Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta6Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_7"])){
        $_SESSION["respuesta7Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta7Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_8"])){
        $_SESSION["respuesta8Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta8Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_9"])){
        $_SESSION["respuesta9Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta9Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_10"])){
        $_SESSION["respuesta10Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta10Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_11"])){
        $_SESSION["respuesta11Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta11Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_12"])){
        $_SESSION["respuesta12Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta12Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_13"])){
        $_SESSION["respuesta13Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta13Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_14"])){
        $_SESSION["respuesta14Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta14Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_15"])){
        $_SESSION["respuesta15Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta15Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_16"])){
        $_SESSION["respuesta16Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta16Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_17"])){
        $_SESSION["respuesta17Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta17Habilidad"] = "No";
    }
    if(isset($_REQUEST["pregunta1_18"])){
        $_SESSION["respuesta18Habilidad"] = rand(2,5);
    }else{
        $_SESSION["respuesta18Habilidad"] = "No";
    }

    echo "<p>Nacido en tierras marcadas por antiguas leyendas, "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." creció inmerso en las tradiciones y secretos de su pueblo "."<strong>".$_SESSION["razaPersonaje"]."</strong>".". Desde muy joven, aprendió el valor de la sabiduría y el coraje, impulsándole a forjar su propio camino. Con un espíritu indomable se adentró en el mundo, decidido a descubrir y dominar los misterios que el destino le tenía reservados.

    Durante su adolescencia, "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." el "."<strong>".$_SESSION["razaPersonaje"]."</strong>"." encontró en la disciplina y el aprendizaje la llave para desentrañar las habilidades únicas de su linaje. Con gran pasión, eligió el sendero del "."<strong>".$_SESSION["clasePersonaje"]."</strong>".", esta decisión no fue casualidad, ya que el destino parecía haberle señalado hacia una misión mayor: proteger a los suyos y mantener vivas las leyendas que contaban las antiguas generaciones.

    Armado con su confiable "."<strong>".$_SESSION["armaPersonaje"]."</strong>".", "."<strong>".$_SESSION["nombrePersonaje"]."</strong>"." emprendió una serie de aventuras que le llevaron por reinos olvidados, bosques encantados y ciudades en ruinas. Cada batalla y cada encuentro le permitieron perfeccionar sus habilidades, mientras forjaba alianzas y enfrentaba enemigos tan temibles como los mitos que alguna vez escuchó de niño. La "."<strong>".$_SESSION["armaPersonaje"]."</strong>"." no solo es un instrumento de combate, sino el símbolo tangible de su compromiso con el honor y la justicia, reflejando la dualidad de su ser: fuerza y sabiduría, tradición e innovación.

    Hoy, este "."<strong>".$_SESSION["razaPersonaje"]." ".$_SESSION["clasePersonaje"]."</strong>"." continúa su viaje, guiado por un firme código moral heredado de sus ancestros y por la convicción de que cada acción, cada decisión, moldea el futuro de su raza y del mundo que lo rodea.</p>"
?>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-bordered border-primary">
                    <tr>
                        <th>Nombre</th>
                        <th>Raza</th>
                        <th>Clase</th>
                        <th>Arma</th>
                    </tr>
                    <tr>
                        <td><?php
                        echo $_SESSION["nombrePersonaje"]
                        ?></td>
                        <td><?php
                        echo $_SESSION["razaPersonaje"]
                        ?></td>
                        <td><?php
                        echo $_SESSION["clasePersonaje"]
                        ?></td>
                        <td><?php
                        echo $_SESSION["armaPersonaje"]
                        ?></td>
                    </tr>
                </table>
                <table class="table table-bordered border-primary">
                    <tr>
                        <th>Características</th>
                        <th>Puntos</th>
                    </tr>
                    <tr>
                        <th>Inteligencia</th>
                        <td><?php
                        echo $_SESSION["puntosInteligencia"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Fuerza</th>
                        <td><?php
                        echo $_SESSION["puntosFuerza"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Destreza</th>
                        <td><?php
                        echo $_SESSION["puntosDestreza"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Constitución</th>
                        <td><?php
                        echo $_SESSION["puntosConstitucion"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Sabiduría</th>
                        <td><?php
                        echo $_SESSION["puntosSabiduria"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Carisma</th>
                        <td><?php
                        echo $_SESSION["puntosCarisma"]
                        ?></td>
                    </tr>
                </table>
                <table class="table table-bordered border-primary">
                    <tr>
                        <th>Habilidad</th>
                        <th>Puntos</th>
                    </tr>
                    <tr>
                        <th>Acrobacias</th>
                        <td><?php
                        echo $_SESSION["respuesta1Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Trato con animales</th>
                        <td><?php
                        echo $_SESSION["respuesta2Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Arcano</th>
                        <td><?php
                        echo $_SESSION["respuesta3Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Atletismo</th>
                        <td><?php
                        echo $_SESSION["respuesta4Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Engaño</th>
                        <td><?php
                        echo $_SESSION["respuesta5Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                    </tr>
                        <th>Historia</th>
                        <td><?php
                        echo $_SESSION["respuesta6Habilidad"]
                        ?></td>
                    <tr>
                        <th>Perspicacia</th>
                        <td><?php
                        echo $_SESSION["respuesta7Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Intimidación</th>
                        <td><?php
                        echo $_SESSION["respuesta8Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Investigación</th>
                        <td><?php
                        echo $_SESSION["respuesta9Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Medicina</th>
                        <td><?php
                        echo $_SESSION["respuesta10Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Naturaleza</th>
                        <td><?php
                        echo $_SESSION["respuesta11Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Percepción</th>
                        <td><?php
                        echo $_SESSION["respuesta12Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Interpretación</th>
                        <td><?php
                        echo $_SESSION["respuesta13Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Persuasión</th>
                        <td><?php
                        echo $_SESSION["respuesta14Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Religión</th>
                        <td><?php
                        echo $_SESSION["respuesta15Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Truco Rumano</th>
                        <td><?php
                        echo $_SESSION["respuesta16Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Sigilo</th>
                        <td><?php
                        echo $_SESSION["respuesta17Habilidad"]
                        ?></td>
                    </tr>
                    <tr>
                        <th>Supervivencia</th>
                        <td><?php
                        echo $_SESSION["respuesta18Habilidad"]
                        ?></td>
                    </tr>
                </table>
    
            </div>
        </div>
    </div>
    
</body>
</html>