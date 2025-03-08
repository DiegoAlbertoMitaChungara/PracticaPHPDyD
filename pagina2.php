<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<?php
    session_start();

    echo"Definitivamente perteneces a la raza de los ".$_SESSION["raza"];
?>
<body>
    <h1>Clases de Dungeons & Dragons</h1>
    <p>
        En Dungeons & Dragons existen diversas clases. Algunas de las principales son:<br><br>
        <strong>Bárbaro:</strong> Guerrero feroz que canaliza su furia y fuerza bruta en el combate, destacando en la agresividad y el poder físico.
        <br>
        <strong>Bardo:</strong> Artista encantador que usa la música, la poesía y habilidades mágicas para inspirar y manipular a aliados y adversarios.
        <br>
        <strong>Brujo:</strong> Portador de magia oscura adquirida a través de pactos con entidades misteriosas, su poder es tan enigmático como peligroso.
        <br>
        <strong>Clérigo:</strong> Devoto de una deidad, que utiliza la fe y el poder divino para sanar, proteger y luchar contra el mal.
        <br>
        <strong>Druida:</strong> Guardián de la naturaleza que convoca el poder de los elementos, protegiendo el equilibrio natural del mundo.
        <br>
        <strong>Explorador:</strong> Experto en rastreo, sigilo y supervivencia, ideal para emboscadas y para navegar terrenos inhóspitos.
        <br>
        <strong>Guerrero:</strong> Combatiente versátil y disciplinado, entrenado en múltiples estilos de lucha y armado para enfrentar cualquier desafío.
        <br>
        <strong>Hechicero:</strong> Usuario de magia innata, cuyo poder surge de su propia esencia, manifestándose de forma explosiva y natural.
        <br>
        <strong>Mago:</strong> Erudito del conocimiento arcano, capaz de aprender y lanzar una amplia variedad de hechizos a través del estudio riguroso.
        <br>
        <strong>Monje:</strong> Maestro de la disciplina física y mental, que combina artes marciales y meditación para lograr un equilibrio perfecto.
        <br>
        <strong>Paladín:</strong> Caballero sagrado comprometido con la justicia, que canaliza habilidades divinas para proteger a los inocentes y combatir el mal.
        <br>
        <strong>Pícaro:</strong> Especialista en el sigilo, la astucia y los trucos, ideal para emboscadas y para aprovechar la precisión en el combate.
    </p>

    <form action="" method="POST">
        <!-- Pregunta 1 -->
        <p>Elige un color con el que te sientas identificado</p>
        <input type="color" name="pregunta1">
        


    </form>
    <?php
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
    ?>
    
</body>
</html>