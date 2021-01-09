<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../modelo/UsuariosPDO.php");

    $usuariosPDO = new UsuariosPDO();

    $rut_usuario = $_POST['rut_usuario'];
    $nombres_usuario = $_POST['nombres_usuario']; 
    $ap_paterno_usuario = $_POST['ap_paterno_usuario'];
    $ap_paterno_materno = $_POST['ap_paterno_materno'];
    $fecha_nacimiento_usuario = $_POST['fecha_nacimiento_usuario'];
    $email = $_POST['email'];
    $telefono_usuario = $_POST['telefono_usuario'];

    $usuariosPDO->actualizaUsuarioPerfil($rut_usuario, $nombres_usuario, $ap_paterno_usuario, $ap_paterno_materno, $fecha_nacimiento_usuario, $email, $telefono_usuario);

?>
