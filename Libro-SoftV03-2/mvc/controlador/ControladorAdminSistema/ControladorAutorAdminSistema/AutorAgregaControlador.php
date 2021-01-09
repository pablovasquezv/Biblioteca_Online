<?php

    require_once("../../../modelo/AutorPDO.php");

        if(isset($_POST['AgregaAutorUsuarioNormal'])){

            $autorPDO = new AutorPDO();
        
            $nombre_autor = $_POST['nombre_autor'];
            $apellido_autor = $_POST['apellido_autor'];
            $fecha_nacimiento_autor = $_POST['fecha_nacimiento_autor'];
            $nacionalidad_autor = $_POST['nacionalidad'];
    
            $autorPDO->agregaAutor($nombre_autor, $apellido_autor, $fecha_nacimiento_autor, $nacionalidad_autor);

        }else{

            $autorPDO = new AutorPDO();
        
            $nombre_autor = $_POST['nombre_autor'];
            $apellido_autor = $_POST['apellido_autor'];
            $fecha_nacimiento_autor = $_POST['fecha_nacimiento_autor'];
            $nacionalidad_autor = $_POST['nacionalidad'];

            $autorPDO->agregaAutor($nombre_autor, $apellido_autor, $fecha_nacimiento_autor, $nacionalidad_autor);

            header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaAutores/FrmAutoresAdminSistema.php");
        }



        


?>