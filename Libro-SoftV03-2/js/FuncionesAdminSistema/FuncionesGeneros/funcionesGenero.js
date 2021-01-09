//Para mostrar en pantalla todos los datos del la tabla de forma automatica
$(document).ready(function(){
    $('#muestraGeneros').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalListaGenero.php');
});

//Funcion que carga el Modal Agrega Región
function cargaModalAgregaGenero(){
    $('#frmAgregaGenero').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalAgregaGenero.php');
}



function cargaModalModificaGenero(id_genero){
    $('#frmModificaGenero').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalModificaGenero.php?id_genero=' + id_genero);
}

//Funcion que Modifica datos de un Genero
function modificaGenero(id_genero){

    //id_region = $('#id_region').val();
    nombre_genero = $('#nombre_genero').val();

    cadenaModificaGenero = "id_genero=" + id_genero +
                         "&nombre_genero=" + nombre_genero;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/GeneroModificaControlador.php",
        data:cadenaModificaGenero,
        success:function(datos){
            $('#muestraGeneros').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalListaGenero.php');
        }
    });
}




//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarGenero(id_genero){
    $('#frmEliminaGenero').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalDecideEliminar.php?id_genero=' + id_genero);
}

//Funcion que elimina un Genero
function eliminaGenero(id_genero){

    cadenaEliminaGenero = "id_genero=" + id_genero;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/GeneroEliminaControlador.php",
        data:cadenaEliminaGenero,
        success:function(datos){
            $('#muestraGeneros').load('../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/ModalesGenero/ModalListaGenero.php');
        }
    });

}