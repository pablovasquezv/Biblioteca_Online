<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../modelo/UsuariosPDO.php');
    require_once("../../../modelo/UsuarioAdminPtoIntercambio.php");

    //Almaceno los datos necesarios para elimnar el administrador de punto de intercambio y su asociación de forma simultanea
    $rut_usuario = $_POST['rut_usuario'];
    $id_usu_admin_pto_inter = $_POST['id_usu_admin_pto_inter'];

    //Creo los objetos de las clases necesarias para acceder a las funciones de eliminar
    $adminPtoIntercambioPDO = new UsuarioAdminPtoIntercambioPDO();
    $usuariosPDO = new UsuariosPDO();

    //PRIMERO: Elimino el vinculo que existe entre el administrador y el punto de intercambio
    $adminPtoIntercambioPDO->eliminaVinculoUsuarioAdminYPtoIntercambio($id_usu_admin_pto_inter);
    //SEGUNDO: Elimino al usuario Administrador de punto de intercambio
    $usuariosPDO->eliminaUsuario($rut_usuario);


?>