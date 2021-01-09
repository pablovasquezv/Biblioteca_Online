<?php

    //Para hacer la busqueda incluyo el archivo UsuariosPDO
    require("../../modelo/UsuariosPDO.php");
    //Creo el objeto de la clase UsuariosPDO para acceder a la funcion que hace el login
    $usuarioLoginPDO = new UsuariosPDO();

    if(isset($_POST['btn_iniciar_sesion'])){

        //Para evitar caracteres raros 
        $rut_usuario = htmlentities(addslashes( $_POST['txt_rut_usuario']));  
        $clave_usuario = htmlentities(addslashes($_POST['txt_password_usuario'])); 

        //Consulto en la base de datos si hay coincidencias
        $resultadoLogin = $usuarioLoginPDO->obtieneUsuarioLogin($rut_usuario, $clave_usuario);

        //Si hay coincidencias hacer lo siguiente
        if($resultadoLogin['rut_usuario']==""){
            echo "Usuario no existe en la base de datos!!";
            header("Refresh:0; url=UsuarioNoExiste.php");
        }else{
            //Iniciamos Sesion!!!
            session_start();
            //Guardamos datos en la variable session
            $_SESSION['rut_usuario'] = $resultadoLogin['rut_usuario'];
            $_SESSION['nombre_usuario'] = $resultadoLogin['nombres_usuario'];
            $_SESSION['ap_paterno_usuario'] = $resultadoLogin['ap_paterno_usuario'];
            //Acá guardo el tipo de usuario para direccionar
            $_SESSION['id_tipo_usuarioTU'] = $resultadoLogin['id_tipo_usuarioTU'];

            //Evaluo el tipo de usuario que es y dependiendo de su numero direcciono
            switch ($_SESSION['id_tipo_usuarioTU']) {
                //Si es usuario tipo 0: Se va Home de Admin del Sistema
                case '0':
                    echo "Administrador del Sistema";
                    header("location:../../vista/VistasAdminSistema/FrmHomeAdminSistema.php"); 
                    break;

                //Si es usuario tipo 1: Se va a Home Admin Punto Intercambio
                case '1':
                    echo "Administrador Punto de Intercambio";
                    
                    //Busqueda para identificar el punto de intercambio a administrar}
                    $datosAdminPtoIntercambio = $usuarioLoginPDO->obtieneUsuariosAdminPtoIntercambioPorRut($_SESSION['rut_usuario']);
                    //Almaceno en variable session datos que son necesarios para seleccionar informacion especifica del admin del punto de intercambio

                    $_SESSION['id_pto_intercambio'] = $datosAdminPtoIntercambio['id_pto_intercambio'];//Almaceno el id del pto a administrar por el usuario
                    $_SESSION['nombre_pto_intercambio'] = $datosAdminPtoIntercambio['nombre_pto_intercambio'];//Almaceno el nombre del pto a administrar en la sesion iniciada
                    $_SESSION['direccion_pto_intercambio'] = $datosAdminPtoIntercambio['direccion_pto_intercambio'];//Direccion
                    $_SESSION['nombre_ciudad'] = $datosAdminPtoIntercambio['nombre_ciudad'];//Ciudad

                    header("location:../../vista/VistasAdminPtoIntercambio/FrmHomeAdminPtoIntercambio.php"); //Direcciono a Home Admin Pto intercambio
                    break;
                
                //Si es usuario tipo 2: Se va a Home Usuario Normal
                case '2':
                    echo "Usuario Normal";
                    header("location:../../vista/VistasUsuarioNormal/FrmHomeUsuarioNormal.php"); 
                    break;               

                default:
                    # code...
                    break;
            }
        }

    }

?>
