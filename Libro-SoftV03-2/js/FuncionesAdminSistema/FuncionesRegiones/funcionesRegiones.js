//Para mostrar en pantalla todos los datos del la tabla de forma automatica
$(document).ready(function(){
    $('#muestraRegiones').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalListaRegion.php');
});

//Funcion Agrega Region Nueva
function agregarRegion(){

    id_region = $('#idRegion').val();
    nombre_region = $('#nombreRegion').val();

    cadenaAgregaRegion = "id_region=" + id_region +
                         "&nombre_region=" + nombre_region;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/RegionAgregaControlador.php",
        data:cadenaAgregaRegion,
        success:function(datos){
            $('#muestraRegiones').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalListaRegion.php');
        }
    });
}

//Funcion que Elimina una Region
function eliminaRegion(id_region){

    cadenaEliminaRegion = "id_region=" + id_region;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/RegionEliminaControlador.php",
        data:cadenaEliminaRegion,
        success:function(datos){
            $('#muestraRegiones').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalListaRegion.php');
        }
    });
}

//Funcion que carga el Modal
function cargaModalModificaRegion(id_region){
    $('#frmModificaRegion').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalModificaRegion.php?id_region=' + id_region);
}

//Funcion que Modifica datos de una Region
function modificaRegion(id_region){

    //id_region = $('#id_region').val();
    nombre_region = $('#nombre_region').val();

    cadenaModificaRegion = "id_region=" + id_region +
                         "&nombre_region=" + nombre_region;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/RegionModificaControlador.php",
        data:cadenaModificaRegion,
        success:function(datos){
            $('#muestraRegiones').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalListaRegion.php');
        }
    });
}


//Funcion que carga el Modal Agrega Región
function cargaModalAgregaRegion(){
    $('#frmAgregaRegion').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalAgregaRegion.php');
}

//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarRegion(id_region){
    $('#frmEliminaRegion').load('../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/ModalesRegion/ModalDecideEliminar.php?id_region=' + id_region);
}
