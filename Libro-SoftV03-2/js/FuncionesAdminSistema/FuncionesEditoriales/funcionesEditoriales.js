//Para mostrar en pantalla todos los datos del la tabla de forma automatica
$(document).ready(function(){
    $('#muestraEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalListaEditorial.php');
});

//Funcion que carga el Modal Agrega Autor
function cargaModalAgregaEditorial(){
    $('#frmAgregaEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalAgregarEditorial.php');
}

//Funcion que Agrega Editorial
function agregarEditorial(){

    //id_region = $('#id_region').val();
    nombre_editorial = $('#nombreEditorial').val();

    cadenaModificaEditorial = "nombre_editorial=" + nombre_editorial;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialAgregaControlador.php",
        data:cadenaModificaEditorial,
        success:function(datos){
            $('#muestraEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalListaEditorial.php');
        }
    });
}

//Funcion que carga el Modal
function cargaModalModificaEditorial(id_editorial){
    $('#frmModificaEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalModificaEditorial.php?id_editorial=' + id_editorial);
}

//Funcion que Modifica datos de una Editorial
function modificaEditorial(id_editorial){

    //id_region = $('#id_region').val();
    nombre_editorial = $('#nombre_editorial').val();

    cadenaModificaEditorial = "id_editorial=" + id_editorial +
                             "&nombre_editorial=" + nombre_editorial;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialModificaControlador.php",
        data:cadenaModificaEditorial,
        success:function(datos){
            $('#muestraEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalListaEditorial.php');
        }
    });
}




//Funcion que elimina una Editorial
function eliminaEditorial(id_editorial){

    cadenaEliminaEditorial = "id_editorial=" + id_editorial;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialEliminaControlador.php",
        data:cadenaEliminaEditorial,
        success:function(datos){
            $('#muestraEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalListaEditorial.php');
        }
    });

}


//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarEditorial(id_editorial){
    $('#frmEliminaEditorial').load('../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/ModalesEditorial/ModalDecideEliminar.php?id_editorial=' + id_editorial);
}