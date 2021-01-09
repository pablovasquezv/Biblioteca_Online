<?php

    //Agregamos el archivo con las funciones
    require_once("../../../modelo/UsuariosPDO.php");

    $conexion = new UsuariosPDO();

        //Datos de ingreso
        $rut_admin_pto_intercambio = $_POST['rut_usuario'];
        $nombres_admin_pto_intercambio = $_POST['nombres_usuario'];
        $ap_Paterno_admin_pto_intercambio = $_POST['ap_paterno_usuario'];
        $ap_Materno_admin_pto_intercambio = $_POST['ap_paterno_materno'];
        $fecha_Nacimiento_admin_pto_intercambio = $_POST['fecha_nacimiento_usuario'];
        $email_admin_pto_intercambio = $_POST['email'];
        $clave_admin_pto_intercambio = $_POST['clave_usuario'];
        $telefono_admin_pto_intercambio = $_POST['telefono_usuario'];        
        $id_Ciudad = $_POST['id_ciudadTU'];

        //Llamando a la función con la consulta


        $conexion->actualizaAdminPtoIntercambio($rut_admin_pto_intercambio, $nombres_admin_pto_intercambio, $ap_Paterno_admin_pto_intercambio, $ap_Materno_admin_pto_intercambio, $fecha_Nacimiento_admin_pto_intercambio, $email_admin_pto_intercambio, $clave_admin_pto_intercambio, $telefono_admin_pto_intercambio, $id_Ciudad);
    

?>