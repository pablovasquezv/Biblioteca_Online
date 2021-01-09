//Función que carga el listado con todos los administradores de la sección administración punto intercambio
$(document).ready(function(){
    $('#muestraAdminPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlListaAdminPtosIntercambio.php');
});

//Función que carga el modal para agregar un administrador de punto de intercambio nuevo
function cargaModalAgregaAdminPtoIntercambio(){
    $('#frmAgregarAdminPuntoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlAgregaAdminPtoInter.php');
}

//Funcion que agrega un punto de intercambio nuevo
//Además valida que los campos estés llenos antes de enviar 
function agregarAdminPtoIntercambio(){

    rut_usuario = $('#rut_usuario_agrega').val();
    nombres_usuario = $('#nombres_usuario').val();
    ap_paterno_usuario = $('#ap_paterno_usuario').val();
    ap_paterno_materno = $('#ap_paterno_materno').val();
    fecha_nacimiento_usuario = $('#fecha_nacimiento_usuario').val();
    email = $('#email').val();
    clave_usuario = $('#clave_usuario').val();
    telefono_usuario = $('#telefono_usuario').val();
    id_ciudadTU = $('#id_ciudadTU').val();
    id_pto_intercambioTAPI = $('#id_pto_intercambioTAPI').val();

    //Validaciones de contenido
    if(rut_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");  
    }else if(nombres_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(ap_paterno_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(ap_paterno_materno == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(fecha_nacimiento_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(email == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(clave_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(telefono_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_ciudadTU == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_pto_intercambioTAPI == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaAgregaPtoIntercambio = "rut_usuario=" + rut_usuario +
                                     "&nombres_usuario=" + nombres_usuario +
                                     "&ap_paterno_usuario=" + ap_paterno_usuario +
                                     "&ap_paterno_materno=" + ap_paterno_materno +
                                     "&fecha_nacimiento_usuario=" + fecha_nacimiento_usuario +
                                     "&email=" + email +
                                     "&clave_usuario=" + clave_usuario +
                                     "&telefono_usuario=" + telefono_usuario +
                                     "&id_ciudadTU=" + id_ciudadTU +
                                     "&id_pto_intercambioTAPI=" + id_pto_intercambioTAPI;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/CtrlAgregaAdminPtoIntercambio.php",
            data:cadenaAgregaPtoIntercambio,
            success:function(datos){                
                $('#muestraAdminPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlListaAdminPtosIntercambio.php');
            }
        });	
    }
                    
}

//Funcion que carga el Modal Decide Eliminar Punto Intercambio
function cargaModalDecideEliminarAdminPtoInter(rut_usuario, id_usu_admin_pto_inter ){
    

    rut_usuario = rut_usuario;
    id_usu_admin_pto_inter = id_usu_admin_pto_inter;

    $('#frmEliminaAdminPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlDecideEliminar.php?rut_usuario=' + rut_usuario + '&id_usu_admin_pto_inter=' + id_usu_admin_pto_inter);
    
}

//Funcion Elimina un Administrador Punto Intercambio
function eliminaAdminPtoIntercambio(rut_usuario, id_usu_admin_pto_inter){

    cadenaEliminaAdminPtoIntercambio = "rut_usuario=" + rut_usuario +
                                        "&id_usu_admin_pto_inter=" + id_usu_admin_pto_inter;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/CtrlEliminaAdminPtoIntercambio.php",
        data:cadenaEliminaAdminPtoIntercambio,
        success:function(datos){
            $('#muestraAdminPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlListaAdminPtosIntercambio.php');
        }
    });
}

//Funciones Página Detalle Usuario Administrador Punto Intercambio

//Funcion que carga información en detalle del usuario Administrador de punto de intercambio
function cargaDetallesAdminPaginaDetalle(rut_usuario){
    
    $('#frmDetallesAdminPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlDetalleAdminPtoIntercambio.php?rut_usuario=' + rut_usuario);
}




//Funcion que carga el Modal Modifica Admin Punto Intercambio
function cargaModalModificaPtoIntercambio(rut_usuario){
    
    $('#frmModificaAdminPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlModAdminPtoInter.php?rut_usuario=' + rut_usuario);
}

//Funcion que modifica administrador de un punto de intercambio nuevo
//Además valida que los campos estés llenos antes de enviar 
function modificaAdminPtoIntercambio(){

    rut_usuario = $('#rut_usuario').val();
    nombres_usuario = $('#nombres_usuario').val();
    ap_paterno_usuario = $('#ap_paterno_usuario').val();
    ap_paterno_materno = $('#ap_paterno_materno').val();
    fecha_nacimiento_usuario = $('#fecha_nacimiento_usuario').val();
    email = $('#email').val();
    clave_usuario = $('#clave_usuario').val();
    telefono_usuario = $('#telefono_usuario').val();
    id_ciudadTU = $('#id_ciudadTU').val();

    //Validaciones de contenido
    if(rut_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");  
    }else if(nombres_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(ap_paterno_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(ap_paterno_materno == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(fecha_nacimiento_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(email == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(clave_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(telefono_usuario == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_ciudadTU == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaAgregaPtoIntercambio = "rut_usuario=" + rut_usuario +
                                     "&nombres_usuario=" + nombres_usuario +
                                     "&ap_paterno_usuario=" + ap_paterno_usuario +
                                     "&ap_paterno_materno=" + ap_paterno_materno +
                                     "&fecha_nacimiento_usuario=" + fecha_nacimiento_usuario +
                                     "&email=" + email +
                                     "&clave_usuario=" + clave_usuario +
                                     "&telefono_usuario=" + telefono_usuario +
                                     "&id_ciudadTU=" + id_ciudadTU;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/CtrlModAdminPtoInter.php",
            data:cadenaAgregaPtoIntercambio,
            success:function(datos){                
                $('#muestraAdminPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlListaAdminPtosIntercambio.php');
            }
        });	
    }
                    
}

//Funcion carga modal para modificar la asignación de administracion de punto de intercambio
function cargaModalModificaAsignacionPtoIntercambio(rut_usuario){
    
    $('#frmModificarAsignacionPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlModAsignacionPtoInter.php?rut_usuario=' + rut_usuario);
}

//Funcion que modifica la asignacion de un usuario como administrador de un punto de intercambio
//Además valida que los campos estés llenos antes de enviar 
function modificaAsignacionPtoIntercambio(rut_usuario){

    
    id_pto_intercambioTAPI = $('#id_pto_intercambioTAPI').val();

    //Validaciones de contenido
    if(id_pto_intercambioTAPI == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaModificaAsignacionPtoIntercambio = "rut_usuario=" + rut_usuario +
                                                 "&id_pto_intercambioTAPI=" + id_pto_intercambioTAPI;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/CtrlModAsignacionPtoInter.php",
            data:cadenaModificaAsignacionPtoIntercambio,
            success:function(datos){                
                $('#muestraAdminPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlAdminPtoIntercambio/MdlAdminPtosIntercambio/MdlListaAdminPtosIntercambio.php');
            }
        });	
    }
                    
}