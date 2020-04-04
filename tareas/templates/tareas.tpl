<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>{$titulo}</title>
    </head>

    <body>

        <div class="container">
            <h1>{$titulo}</h1>

            <ul class="list-group">
                {foreach from=$tareas item='tarea'}
                    <li class="list-group-item">
                        {if $tarea['completada'] === "0"}
                            {$tarea['titulo']} : {$tarea['descripcion']}
                        {else}
                            <s>{$tarea['titulo']} : {$tarea['descripcion']}</s>
                        {/if}
                        <a href="./borrar/{$tarea["id"]}">Borrar</a>
                        |
                        <a href="./editar/{$tarea["id"]}">Editar</a>
                    </li>
                {/foreach}
            </ul>
        </div>


        <div class="container mt-3">
            <h1>Formulario</h1>
            <form action="nueva" method="POST">
                <div class="form-group">
                    <label for="tituloTarea">Titulo</label>
                    <input type="text" class="form-control" id="tituloTarea" name="titulo">
                </div>
                <div class="form-group">
                    <label for="descripcionTarea">Descripcion</label>
                    <input type="text" class="form-control" id="descripcionTarea" name="descripcion">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="completadaTarea" name="completada">
                    <label class="form-check-label" for="completadaTarea">Completada</label>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>




        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>