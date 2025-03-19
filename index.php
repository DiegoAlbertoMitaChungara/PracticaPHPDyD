<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Insertar Nombre</title>
    <style>
        body{
            background-image: url("https://forgottenrealms.fandom.com/wiki/File:Neverwinter-_Dragonslayer.jpg");
        }
        #formulario{
            height: 400px;
            border: 2px solid black;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: gray;
        }
        #titulo{
            height: 150px;
            border: 2px solid black;
            border-radius: 15px;
            text-align: center;
            align-content: center;
            background-color: midnightblue;
        }

    </style>
</head>
<body>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6" id="titulo">
            <h1>DUNGEONS & DRAGONS</h1>
        </div>
        <div class="col-3">

        </div>
    </div>

    <div class="row">
        <div class="col-3">


        </div>
        <div class="col-6" id="formulario">
            <p>
                Creación de tu personaje de D&D. Introduce el nombre de tu personaje
            </p>
            <form action="pagina1.php" method="POST">
                <div class="mb-3">
                    <label>Nombre: </label>
                    <input type="text" name="nombre"required>
                    <div class="form-text">No puedes dejar este campo vacío</div>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
        <div class="col-3">

        </div>
    </div>

    

    
</body>
</html>