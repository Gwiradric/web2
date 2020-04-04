{include file="header.tpl"}

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

{include file="footer.tpl"}