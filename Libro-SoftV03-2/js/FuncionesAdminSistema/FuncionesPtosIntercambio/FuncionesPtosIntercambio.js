//Función que carga el listado de la sección administración punto intercambio
$(document).ready(function(){
    $('#muestraPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlListaPtosIntercambio.php');
});

//Función que carga el modal para agregar un punto de intercambio nuevo
function cargaModalAgregaPtoIntercambio(){
    $('#frmAgregarPuntoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlAgregaPtoIntercambio.php');
}

//Funcion que agrega un punto de intercambio nuevo
//Además valida que los campos estés llenos antes de enviar 
function agregarPtoIntercambio(){

    nombre_pto_intercambio = $('#nombre_pto_intercambio').val();
    direccion_pto_intercambio = $('#direccion_pto_intercambio').val();
    id_ciudadTPI = $('#id_ciudadTPI').val();

    if(nombre_pto_intercambio == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");  
    }else if(direccion_pto_intercambio == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_ciudadTPI == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaAgregaPtoIntercambio = "nombre_pto_intercambio=" + nombre_pto_intercambio+
                                     "&direccion_pto_intercambio=" + direccion_pto_intercambio +
                                     "&id_ciudadTPI=" + id_ciudadTPI;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/CtrlAgregaPtoIntercambio.php",
            data:cadenaAgregaPtoIntercambio,
            success:function(datos){                
                $('#muestraPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlListaPtosIntercambio.php');
            }
        });		
    }
                    
}

//Funcion que carga el Modal Decide Eliminar Punto Intercambio
function cargaModalDecideEliminarPtoIntercambio(id_pto_intercambio){
    $('#frmEliminaPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlDecideEliminar.php?id_pto_intercambio=' + id_pto_intercambio);
}

//Funcion Elimina Punto Intercambio
function eliminaPtoIntercambio(id_pto_intercambio){

    cadenaEliminaPtoIntercambio = "id_pto_intercambio=" + id_pto_intercambio;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/CtrlEliminaPtoIntercambio.php",
        data:cadenaEliminaPtoIntercambio,
        success:function(datos){
            $('#muestraPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlListaPtosIntercambio.php');
        }
    });
}

//Función que carga el modal para modificar un punto de intercambio nuevo
function cargaModalModificaPtoIntercambio(id_pto_intercambio){
    $('#frmModificaPtoIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlModificaPtoIntercambio.php?id_pto_intercambio=' + id_pto_intercambio);
}

//Funcion que modifica un punto de intercambio nuevo
//Además valida que los campos estés llenos antes de enviar 
function modificarPtoIntercambio(id_pto_intercambio){

    nombre_pto_intercambio = $('#nombre_pto_intercambio').val();
    direccion_pto_intercambio = $('#direccion_pto_intercambio').val();
    id_ciudadTPI = $('#id_ciudadTPI').val();

    if(nombre_pto_intercambio == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");  
    }else if(direccion_pto_intercambio == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_ciudadTPI == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaAgregaPtoIntercambio = "id_pto_intercambio=" + id_pto_intercambio +
                                     "&nombre_pto_intercambio=" + nombre_pto_intercambio+
                                     "&direccion_pto_intercambio=" + direccion_pto_intercambio +
                                     "&id_ciudadTPI=" + id_ciudadTPI;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/CtrlModificaPtoIntercambio.php",
            data:cadenaAgregaPtoIntercambio,
            success:function(datos){                
                $('#muestraPuntosDeIntercambio').load('../../../controlador/ControladorAdminSistema/CtrlPtosIntercambio/MdlPtosIntercambio/MdlListaPtosIntercambio.php');
            }
        });		
    }
                    
}




