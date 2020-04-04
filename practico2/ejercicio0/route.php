<?php
require_once "index.php";

$action = $_GET["action"];

if($action == ''){
    echo home();
}else{
    if (isset($action)){
        $partesURL = explode("/", $action);

        if ($partesURL[0] == "photos") {
            echo photos($partesURL[1]);
        }

    }
}

?>
