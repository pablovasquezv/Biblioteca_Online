<?php

    require_once("../../../modelo/UsuarioAdminPtoIntercambio.php");

    $rut_usuario = $_POST['rut_usuario'];
    $id_pto_intercambioTAPI = $_POST['id_pto_intercambioTAPI'];

    $adminPtoIntercambioPDO = new UsuarioAdminPtoIntercambioPDO();

    //obtengo los datos del registro
    $datosAsigancion = $adminPtoIntercambioPDO->obtieneUsuariosAdminPtoIntercambioPorRut($rut_usuario);

    //Obtengo el id del registro a modificar
    $id_usu_admin_pto_inter = $datosAsigancion['id_usu_admin_pto_inter'];

    $adminPtoIntercambioPDO->actualizaVinculoUsuarioAdminYPtoIntercambio($id_usu_admin_pto_inter, $id_pto_intercambioTAPI, $rut_usuario);


?>


