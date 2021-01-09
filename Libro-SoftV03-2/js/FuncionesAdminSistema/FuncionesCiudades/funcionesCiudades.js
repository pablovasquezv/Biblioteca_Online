//Para mostrar en pantalla todos los datos del la tabla de forma automatica
$(document).ready(function(){
    $('#muestraCiudades').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalListaCiudad.php');
});

//Funcion que carga el Modal Agrega Región
function cargaModalAgregaCiudad(){
    $('#frmAgregaCiudad').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalAgregaCiudad.php');
}

//Funcion Agrega Ciudad Nueva
function agregarCiudad(){
    
    nombre_ciudad = $('#nombreCiudad').val();
    id_regionTC = $('#idRegionTC').val();

    cadenaAgregaCiudad = "nombre_ciudad=" + nombre_ciudad +
                         "&id_regionTC=" + id_regionTC;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/CiudadAgregaControlador.php",
        data:cadenaAgregaCiudad,
        success:function(datos){
            $('#muestraCiudades').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalListaCiudad.php');
        }
    });                     
}


//Funcion que carga el Modal
function cargaModalModificaCiudad(id_ciudad){
    $('#frmModificaCiudad').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalModificaCiudad.php?id_ciudad=' + id_ciudad);
}

function modificaCiudad(id_ciudad){    

    nombre_ciudad = $('#nombreCiudad').val();
    id_regionTC = $('#idRegionTC').val();
    
    cadenaModificaCiudad = "id_ciudad=" + id_ciudad +
                           "&nombre_ciudad=" + nombre_ciudad +
                           "&id_regionTC=" + id_regionTC;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/CiudadModificaControlador.php",
        data:cadenaModificaCiudad,
        success:function(datos){
            $('#muestraCiudades').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalListaCiudad.php');
        }
    });                     
}

//Funcion Elimina Ciudades
function eliminaCiudad(id_ciudad){

    cadenaEliminaCiudad = "id_ciudad=" + id_ciudad;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/CiudadEliminaControlador.php",
        data:cadenaEliminaCiudad,
        success:function(datos){
            $('#muestraCiudades').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalListaCiudad.php');
        }
    });
}

//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarCiudad(id_ciudad){
    $('#frmEliminaCiudad').load('../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/ModalesCiudad/ModalDecideEliminar.php?id_ciudad=' + id_ciudad);
}