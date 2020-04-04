<?php

include_once "./libs/Smarty.class.php";

class TareasView
{
    function mostrarTareas($tareas, $titulo) {
        $smarty = new Smarty();

        $smarty->assign('tareas', $tareas);
        $smarty->assign('titulo', $titulo);

        $smarty->display('templates/tareas.tpl');
    }
}
