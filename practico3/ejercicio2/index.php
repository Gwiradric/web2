<?php

if (isset($_POST['enviar'])) {
    
    require_once 'funciones.php';
    
    $archivo = $_FILES['archivo']['name'];
    
    // SE ALMACENA EN UNA CARPETA TEMPORAL ENTONCES
    // LO COMPIAMOS EN NUESTRA CARPETA
    
    $archivo_copiado = $_FILES['archivo']['tmp_name'];

    $archivo_guardado = "copia_" . $archivo;

    if (copy($archivo_copiado, $archivo_guardado)) {
        echo 'Se copio correctamente';
    } else {
        echo 'No se copio correctamente';
    }

    if (file_exists($archivo_guardado)) {
        
        $fp = fopen($archivo_guardado, "r");

        while ($datos = fgetcsv($fp, 1000, ";")) {
            
            $resultado = insertar($datos);
            
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="formulario">
        <form action="index.php" class="formularioCompleto" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo" id="archivo" class="form-control">
            <input type="submit" name="enviar" value="Enviar archivo" class="form-control">
        </form>
    </div>

</body>
</html>
