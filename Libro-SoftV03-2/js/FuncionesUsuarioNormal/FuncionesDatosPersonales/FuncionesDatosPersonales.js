//Funcion que carga el contenido con los datos personales del usuario
$(document).ready(function(){
    $('#frmAdministrarCuenta').load('../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/ModalDatosPersonales.php');
});

//Función que carga el modal para modificar los datos personales del usuario
function cargaModalModificaDatosPersonales(rut_usuario){
    $('#frmModalModificaDatosPersonales').load('../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/ModalModificaDatosPersonales.php?rut_usuario=' + rut_usuario);
}

//Funcion Modifica Datos del Usuario
function modificarDatosPersonales(rut_usuario){

    nombres_usuario = $('#nombres_usuario').val();
    ap_paterno_usuario = $('#ap_paterno_usuario').val();
    ap_paterno_materno = $('#ap_paterno_materno').val();
    fecha_nacimiento_usuario = $('#fecha_nacimiento_usuario').val();
    email = $('#email').val();
    telefono_usuario = $('#telefono_usuario').val();

    if(nombres_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");    
    }else if(ap_paterno_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(ap_paterno_materno == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(fecha_nacimiento_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(email == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(telefono_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{
        cadenaModificaDatosPersonales = "rut_usuario=" + rut_usuario +
                                        "&nombres_usuario=" + nombres_usuario +
                                        "&ap_paterno_usuario=" + ap_paterno_usuario +
                                        "&ap_paterno_materno=" + ap_paterno_materno +
                                        "&fecha_nacimiento_usuario=" + fecha_nacimiento_usuario +
                                        "&email=" + email +
                                        "&telefono_usuario=" + telefono_usuario;

        $.ajax({
            type:"POST",
            url:"../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/CtrlModDatosPersonales.php",
            data:cadenaModificaDatosPersonales,
            success:function(datos){
                $('#frmAdministrarCuenta').load('../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/ModalDatosPersonales.php');
                $('#ModalModificaDatosPersonales').modal('hide')
            }
        });		
    }
                    
}

//Función que carga el modal para cambiar la contraseña del usuario
function cargaModalModificaClave(rut_usuario){
    $('#frmModalModificaClave').load('../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/ModalModificaClave.php?rut_usuario=' + rut_usuario);
}

//Funcion Modifica Datos del Usuario
function cambiarClave(rut_usuario){

    //Recupero los datos ingresados por los campos de texto
    clave_usuario = $('#clave_usuario').val();
    clave_usuario_repetida = $('#clave_usuario_repetida').val();
    
    //Compruebo que no esten vacios los campos
    if((clave_usuario == "") || (clave_usuario_repetida == "")){
        
        alert("Campo Obligatorio. Por favor ingrese información.");  
        
    //Compruebo que coincidan las contraseñas nuevas repetidas    
    }else if(clave_usuario == clave_usuario_repetida){
        //Si coinciden, que se ejecute el cambio en la base de datos

        cadenaCambiaClave = "rut_usuario=" + rut_usuario +
                            "&clave_usuario= " + clave_usuario;

        $.ajax({
            type:"POST",
            url:"../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/CtrlCambiaClave.php",
            data:cadenaCambiaClave,
            success:function(datos){
                $('#frmAdministrarCuenta').load('../../controlador/ControladorUsuarioNormal/ControladorDatosPersonales/ModalDatosPersonales.php');
                $('#ModalModificaClave').modal('hide')
            }
        });	

    }else{
        //Si no coinciden mandar una alerta para que verifique
        alert("No coinciden las claves nuevas :(");

    }
    

        	
    
                    
}