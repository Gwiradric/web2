<?php
define('HOME', 'Location: http://' . $_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        '' => 'TareasController#home',
        'home' => 'TareasController#home',
        'nueva' => 'TareasController#nuevaTarea',
        'borrar' => 'TareasController#borrarTarea',
        'editar' => 'TareasController#editarTarea'
    ];
}
