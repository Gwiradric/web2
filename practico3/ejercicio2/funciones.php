<?php

function crearConexion() {
    return $db = new PDO('mysql:host=localhost;
    dbname=db_deudas;charset=utf8'
    , 'root', '');
}

function insertar($datos) {
    $db = crearConexion();

    if ($datos[1] != "") {
        $fecha_pago = date('Y-m-d', strtotime($datos[1]));
    } else {
        $fecha_pago = date('Y-m-d');
    }

    if ($datos[2] != "") {
        $fecha_vencimiento = date('Y-m-d', strtotime($datos[2]));
    } else {
        $fecha_vencimiento = date('Y-m-d');
    }

    $sentencia = $db->prepare("INSERT INTO deudas (cuota,fecha_pago,fecha_vencimiento,cuota_capital,intereses,pagado,deudor) VALUES (?,?,?,?,?,?,?)");
        
    $sentencia->execute(array($datos[0],$fecha_pago,$fecha_vencimiento,$datos[3],$datos[4],$datos[5],$datos[6]));
}