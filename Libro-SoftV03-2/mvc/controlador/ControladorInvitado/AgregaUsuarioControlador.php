<?php

    //Agregamos el archivo con las funciones
    require_once("../../modelo/UsuariosPDO.php");

    $conexion = new UsuariosPDO();

    if(isset($_POST['btn_RegistraUsuarioNormal'])){
   
        //Datos de ingreso
        $rut_UsuarioNormal = $_POST['rut'];
        $nombres_UsuarioNormal = $_POST['txt_nombres_Usuario'];
        $ap_Paterno_UsuarioNormal = $_POST['txt_ap_Paterno'];
        $ap_Materno_UsuarioNormal = $_POST['txt_ap_Materno'];
        $fecha_Nacimiento_UsuarioNormal = $_POST['dte_nacimiento_Usuario'];
        $email_UsuarioNormal = $_POST['txt_email_Usuario'];
        $clave_UsuarioNormal = $_POST['txt_password_Usuario'];
        $telefono_UsuarioNormal = $_POST['txt_telefono_Usuario'];
        $fecha_Ingreso_UsuarioNormal = date("Y-m-d");
        $id_TipoUsuarioNormal = 2; 
        $id_Ciudad = $_POST['cbx_ciudad'];

        //Llamando a la función con la consulta
        $conexion->agregaUsuario($rut_UsuarioNormal, 
                                 $nombres_UsuarioNormal, 
                                 $ap_Paterno_UsuarioNormal, 
                                 $ap_Materno_UsuarioNormal, 
                                 $fecha_Nacimiento_UsuarioNormal, 
                                 $email_UsuarioNormal, 
                                 $clave_UsuarioNormal, 
                                 $telefono_UsuarioNormal, 
                                 $fecha_Ingreso_UsuarioNormal, 
                                 $id_TipoUsuarioNormal, 
                                 $id_Ciudad);
        echo "Usuario Agregado Con Éxito!! :)";
        header("Refresh:2; url=../../vista/VistasInvitado/FrmLogin.php");

    }

    

?>