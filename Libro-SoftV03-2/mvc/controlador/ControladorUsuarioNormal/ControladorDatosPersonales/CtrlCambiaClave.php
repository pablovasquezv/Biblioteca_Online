<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../modelo/UsuariosPDO.php");

    $usuariosPDO = new UsuariosPDO();

    $rut_usuario = $_POST['rut_usuario'];
    $clave_usuario = $_POST['clave_usuario']; 
    

    $usuariosPDO->actualizaClaveUsuario($rut_usuario, $clave_usuario);
?>