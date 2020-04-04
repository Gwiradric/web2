<?php

class TareasModel
{
    //VARIABLE QUE ACCEDE A LA DB
    private $db;

    function __construct()
    {
        //SE INICIA LA CONEXION A LA BASE DE DATOS
        $this->db = new PDO(
            'mysql:host=localhost;
            dbname=db_tareas;charset=utf8',
            'root',
            ''
        );
    }

    function obtenerTarea($id)
    {
        //OBTENEMOS UNA TAREA ESPECIFICA POR UN ID
        $sentencia = $this->db->prepare('SELECT * FROM tarea WHERE id = ?');
        $sentencia->execute(array($id));
        return ($sentencia->fetch(PDO::FETCH_ASSOC));
    }

    function obtenerTareas()
    {
        //OBTENEMOS TODAS LAS TAREAS DE LA DB
        $sentencia = $this->db->prepare('SELECT * FROM tarea');
        $sentencia->execute();
        return ($sentencia->fetchAll(PDO::FETCH_ASSOC));
    }

    function insertarTarea($titulo, $descripcion, $completada)
    {
        //INSERTAMOS UNA TAREA
        $sentencia = $this->db->prepare('INSERT INTO tarea (titulo, descripcion, completada) VALUES (?, ?, ?)');
        $sentencia->execute(array($titulo, $descripcion, $completada));
    }

    function borrarTarea($id)
    {
        //BORRAMOS UNA TAREA ESPECIFICA
        $sentencia = $this->db->prepare('DELETE FROM tarea WHERE id = ?');
        $sentencia->execute(array($id));
    }

    function editarTarea($id)
    {
        $sentencia = $this->db->prepare('SELECT completada FROM tarea WHERE id = ?');
        $sentencia->execute(array($id));
        $dato = $sentencia->fetch(PDO::FETCH_ASSOC);

        if ($dato['completada'] == 0)
            $completada = 1;
        else {
            $completada = 0;
        }
        
        //ACTUALIZAMOS ESTADO DE LA TAREA
        $sentencia = $this->db->prepare('UPDATE tarea SET completada = ? WHERE id = ?');
        $sentencia->execute(array($completada, $id));
    }
}
