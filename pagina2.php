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
        En Dungeons & Dragons existen diversas clases. Algunas de las principales son:
        <strong>Bárbaro</strong>, <strong>Bardo</strong>, <strong>Brujo</strong>, <strong>Clérigo</strong>, <strong>Druida</strong>,
        <strong>Explorador</strong>, <strong>Guerrero</strong>, <strong>Hechicero</strong>, <strong>Mago</strong>, <strong>Monje</strong>,
        <strong>Paladín</strong> y <strong>Pícaro</strong>.
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