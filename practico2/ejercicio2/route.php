<?php
require_once "index.php";

$action = $_GET["action"];


$index = new Index();

if($action == ''){
    echo $index->home();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if ($partesURL[0] == "circulo") {
            echo $index->crearCirculo();
        } elseif ($partesURL[0] == "buscar") {
            if (isset($partesURL[1])) {
                if ($partesURL[1] == "posicion")
                    echo $index->mostrarFigura();
                elseif ($partesURL[1] == "area") {
                    echo $index->buscarAreaMenor();
                }
            } else {
                $index->home();
            }
        }

    }
}
