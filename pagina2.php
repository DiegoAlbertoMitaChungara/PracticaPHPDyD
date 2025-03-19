<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
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

?>
<body>

    <div class="row">
        <div class="col-3"></div>
            <div class="col-6" id="titulo">
                <h1>Clases de Dungeons & Dragons</h1>
            </div>
        <div class="col-3"></div>
    </div>

    <div class="row">
        <div class="col-3">
            

        </div>
        <div class="col-6" id="formulario">
            <p><?php echo $_SESSION["nombrePersonaje"].", "?>ahora que conocemos tu origen: <?php echo $_SESSION["razaPersonaje"]?>, es hora de averiguar qué clase es la idónea para una futura leyenda como tú.</p>
            <p>En Dungeons & Dragons existen diversas clases únicas con sus respectivas armas. Algunas de las principales son:</p>

            <div id="descripcionClases">
                <p>
                    <strong>Bárbaro:</strong> Guerrero feroz que canaliza su furia y fuerza bruta en el combate, destacando en la agresividad y el poder físico.
                    <br>
                    <span style="color: gray; font-weight: bold;">Hacha de batalla: </span> Pesada y brutal, el hacha de batalla es el arma perfecta para un guerrero salvaje que se lanza al combate con furia imparable.
                    <br>
                </p>

                <p>
                    <strong>Bardo:</strong> Artista encantador que usa la música, la poesía y habilidades mágicas para inspirar y manipular a aliados y adversarios.
                    <br>
                    <span style="color: gray; font-weight: bold;">Estoque y laúd: </span> Un estoque elegante, usado con destreza en duelos. Combinado con su laúd, el bardo lucha tanto con la música como con la espada.
                    <br>
                </p>
                
                <p>
                    <strong>Brujo:</strong> Portador de magia oscura adquirida a través de pactos con entidades misteriosas, su poder es tan enigmático como peligroso.
                    <br>
                    <span style="color: gray; font-weight: bold;">Báculo arcano: </span> Un bastón imbuido con poder oscuro, utilizado para canalizar la magia obtenida de pactos con entidades místicas.
                    <br>
                </p>

                <p>
                    <strong>Clérigo:</strong> Devoto de una deidad, que utiliza la fe y el poder divino para sanar, proteger y luchar contra el mal.
                    <br>
                    <span style="color: gray; font-weight: bold;">Maza: </span> Un arma contundente utilizada por los servidores de los dioses, diseñada para aplastar el mal sin derramar sangre.
                    <br>
                </p>

                <p>
                    <strong>Druida:</strong> Guardián de la naturaleza que convoca el poder de los elementos, protegiendo el equilibrio natural del mundo.
                    <br>
                    <span style="color: gray; font-weight: bold;">Bastón de madera: </span> Un símbolo de su conexión con la naturaleza, este bastón les ayuda a lanzar conjuros y controlar los elementos.
                    <br>
                </p>

                <p>
                    <strong>Explorador:</strong> Experto en rastreo, sigilo y supervivencia, ideal para emboscadas y para navegar terrenos inhóspitos.
                    <br>
                    <span style="color: gray; font-weight: bold;">Arco largo: </span> Un arma de gran alcance, perfecta para emboscadas y ataques a distancia. Utilizado por cazadores y supervivientes que dominan los terrenos salvajes.
                    <br>
                </p>

                <p>
                    <strong>Guerrero:</strong> Combatiente versátil y disciplinado, entrenado en múltiples estilos de lucha y armado para enfrentar cualquier desafío.
                    <br>
                    <span style="color: gray; font-weight: bold;">Espada bastarda: </span> También conocida como "espada de mano y media", es versátil y poderosa, permitiendo ataques letales tanto con una como con ambas manos.
                    <br>
                </p>
                
                <p>
                    <strong>Hechicero:</strong> Usuario de magia innata, cuyo poder surge de su propia esencia, manifestándose de forma explosiva y natural.
                    <br>
                    <span style="color: gray; font-weight: bold;">Varita mágica: </span> Un canalizador de poder que amplifica la magia innata del hechicero, permitiéndole desatar conjuros con facilidad.
                    <br>
                </p>

                <p>
                    <strong>Mago:</strong> Erudito del conocimiento arcano, capaz de aprender y lanzar una amplia variedad de hechizos a través del estudio riguroso.
                    <br>
                    <span style="color: gray; font-weight: bold;">Libro de hechizos y daga: </span> El libro contiene el verdadero arsenal de un mago: su conocimiento de la magia. La daga es una herramienta de emergencia, más que un arma principal.
                    <br>
                </p>

                <p>
                    <strong>Monje:</strong> Maestro de la disciplina física y mental, que combina artes marciales y meditación para lograr un equilibrio perfecto.
                    <br>
                    <span style="color: gray; font-weight: bold;">Puños: </span> A través del entrenamiento marcial, el monje convierte su propio cuerpo en un arma mortal, capaz de derribar enemigos con golpes rápidos y precisos.
                    <br>
                </p>

                <p>
                    <strong>Paladín:</strong> Caballero sagrado comprometido con la justicia, que canaliza habilidades divinas para proteger a los inocentes y combatir el mal.
                    <br>
                    <span style="color: gray; font-weight: bold;">Espada larga: </span> Una espada de hoja recta, ideal para el combate con una sola mano o a dos manos. Simboliza honor, justicia y la lucha contra el mal.
                    <br>
                </p>

                <p>
                    <strong>Pícaro:</strong> Especialista en el sigilo, la astucia y los trucos, ideal para emboscadas y para aprovechar la precisión en el combate.
                    <br>
                    <span style="color: gray; font-weight: bold;">Daga: </span> Pequeña, rápida y letal en manos expertas. Perfecta para ataques sorpresa y combates en la oscuridad.
                </p>

            </div>
            

            <form action="pagina3.php" method="POST">
                <!-- Pregunta 1: Number -->
                <div class="mb-3">
                    <label>¿A cuántos enemigos preferirías enfrentar en combate, <?php echo $_SESSION["nombrePersonaje"]." el ".$_SESSION["razaPersonaje"] ?>?</label>
                    <input type="number" name="pregunta1C" min="1" max="30" value="1">
                    <div class="form-text">Mínimo 1, máximo 30</div>
                </div>
                <!-- Pregunta 2: Color -->
                <div class="mb-3">
                    <label>Elige el color con el que te sientas más identificado, <?php echo $_SESSION["nombrePersonaje"]." el ".$_SESSION["razaPersonaje"] ?>?</label>
                    <input type="color" name="pregunta2C">
                </div>
                <!-- Pregunta 3: Range -->
                <div class="mb-3">
                    <label>¿Cuántas aliados prefieres tener a tu lado en una batalla decisiva, <?php echo $_SESSION["nombrePersonaje"]." el ".$_SESSION["razaPersonaje"] ?>?</label>
                    <input type="range" class="form-range" name="pregunta3C" min="0" max="25">
                    <div class="form-text">Mínimo 0, máximo 25</div>
                </div>
                <!-- Pregunta 4: Date -->
                <div class="mb-3">
                    <label>¿En qué fecha iniciarías tu aventura épica, <?php echo $_SESSION["nombrePersonaje"]." el ".$_SESSION["razaPersonaje"] ?>?</label>
                    <input type="date" name="pregunta4C" min="2025-01-01" max="2025-12-31" value="2025-01-01">
                    <div class="form-text">Solo fechas de 2025</div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
        <div class="col-3">


        </div>
    </div>
    

    
    
</body>
</html>