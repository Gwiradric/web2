<?php

include_once "./model/TareasModel.php";
include_once "./view/TareasView.php";

class TareasController
{
    //MVC
    private $model;
    private $view;
    private $titulo;

    public function __construct()
    {
        $this->titulo = 'Tareas';
        //INICIALIZACION DEL MODELO Y LA VISTA
        $this->model = new TareasModel();
        $this->view = new TareasView();
    }

    public function home()
    {
        $tareas = $this->model->obtenerTareas();
        $this->view->mostrarTareas($tareas, $this->titulo);
    }

    public function nuevaTarea()
    {
        if (isset($_POST['titulo'], $_POST['descripcion'])) {
            
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];

            if (isset($_POST['completada']))
                $completada = 1;
            else {
                $completada = 0;
            }
            
            $this->model->insertarTarea($titulo, $descripcion, $completada);
        }

        header(HOME);
    }

    public function borrarTarea($params)
    {
        $this->model->borrarTarea($params[0]);
        header(HOME);
    }

    public function editarTarea($params)
    {
        $this->model->editarTarea($params[0]);
        header(HOME);
    }
}
