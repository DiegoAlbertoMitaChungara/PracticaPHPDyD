<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h1>Características de Dungeons & Dragons</h1>

        <?php
            session_start();
            echo "Definitivamente eres un ".$_SESSION["razaPersonaje"]." ".$_SESSION["clasePersonaje"].", ".$_SESSION["nombrePersonaje"];
        ?>
        <p>
            En Dungeons & Dragons existen diversas características únicas. Algunas de las principales son:<br><br>
            <strong>Inteligencia:</strong> La Inteligencia evalúa la capacidad de razonamiento, aprendizaje y conocimiento. Esta característica es crucial para personajes que dependen del estudio, la resolución de acertijos y la memorización de información, como los magos. Un personaje con alta Inteligencia suele tener un amplio bagaje cultural y puede aprender idiomas, investigar y encontrar soluciones creativas a los problemas.
            <br>
            <strong>Fuerza:</strong> La Fuerza mide el poder físico y la capacidad de un personaje para realizar tareas que requieren esfuerzo bruto. Es esencial para actividades como levantar o empujar objetos pesados, romper barreras, y en combate, determina el daño que se inflige con armas cuerpo a cuerpo. Un personaje con alta Fuerza destacará en maniobras atléticas y en situaciones donde se requiera una gran potencia física.
            <br>
            <strong>Destreza:</strong> La Destreza representa la agilidad, coordinación, reflejos y equilibrio. Esta característica influye en la capacidad de esquivar ataques, ejecutar maniobras sigilosas y realizar tareas que requieran precisión manual, como desarmar trampas o robar. Además, un alto puntaje de Destreza mejora la iniciativa en combate y, en muchos casos, hace al personaje más difícil de golpear.
            <br>
            <strong>Constitución:</strong> La Constitución mide la resistencia física y la vitalidad. Es fundamental para determinar la cantidad de puntos de golpe de un personaje, lo que refleja su capacidad para resistir daños, enfermedades y fatiga. Una buena Constitución permite a los personajes mantenerse en pie durante largos combates y soportar situaciones extremas sin rendirse.
            <br>
            <strong>Sabiduría:</strong> La Sabiduría está vinculada a la percepción, intuición y conexión con el entorno. Es la base para detectar detalles sutiles, como trampas, señales del ambiente o el comportamiento de otros seres. Además, personajes como clérigos y druidas usan la Sabiduría para canalizar su magia, lo que la convierte en una característica clave en la toma de decisiones basadas en el instinto y el sentido común.
            <br>
            <strong>Carisma:</strong> El Carisma mide la fuerza de la personalidad, la capacidad de persuasión y el magnetismo personal. Un alto Carisma permite a los personajes liderar, inspirar y negociar de manera efectiva. Es vital para aquellas clases que se centran en la interacción social y en la magia basada en la fuerza de voluntad, como los bardos, hechiceros y paladines. Un personaje carismático puede influir en amigos y enemigos, moldeando situaciones a su favor mediante la diplomacia o la intimidación.
        </p>

</body>
</html>