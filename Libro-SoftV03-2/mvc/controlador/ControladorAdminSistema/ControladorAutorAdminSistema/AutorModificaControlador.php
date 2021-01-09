<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../modelo/AutorPDO.php");

    $autorPDO = new AutorPDO();

    $id_autor = $_POST['id_autor'];
    $nombre_autor = $_POST['nombre_autor'];
    $apellido_autor = $_POST['apellido_autor'];
    $fecha_nacimiento_autor = $_POST['fecha_nacimiento_autor'];
    $nacionalidad = $_POST['nacionalidad'];

    $autorPDO->actualizaAutor($id_autor, $nombre_autor, $apellido_autor, $fecha_nacimiento_autor, $nacionalidad);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaAutores/FrmAutoresAdminSistema.php");

?>    