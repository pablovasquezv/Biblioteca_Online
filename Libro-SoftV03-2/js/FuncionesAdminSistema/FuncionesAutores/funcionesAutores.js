//Para mostrar en pantalla todos los datos del la tabla de forma automatica
$(document).ready(function(){
    $('#muestraAutores').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalListaAutor.php');
});

//Funcion que carga el Modal Agrega Autor
function cargaModalAgregaAutor(){
    $('#frmAgregaAutor').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalAgregaAutor.php');
}



//Funcion que carga el Modal
function cargaModalModificaAutor(id_autor){
    $('#frmModificaAutor').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalModificaAutor.php?id_autor=' + id_autor);
}

//Funcion que Modifica datos de un Autor
function modificaAutor(id_autor){

    
    nombre_autor = $('#nombreAutor').val();
    apellido_autor = $('#apellidoAutor').val();
    fecha_nacimiento_autor = $('#fechaNacimientoAutor').val();
    nacionalidad = $('#nacionalidadAutor').val();

    cadenaModificaAutor = "id_autor=" + id_autor + 
                        "&nombre_autor=" + nombre_autor +
                        "&apellido_autor=" + apellido_autor +
                        "&fecha_nacimiento_autor=" + fecha_nacimiento_autor +
                        "&nacionalidad=" + nacionalidad;

    $.ajax({    
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/AutorModificaControlador.php",
        data:cadenaModificaAutor,
        success:function(datos){
            $('#muestraAutores').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalListaAutor.php');
        }
    });
}




//Funcion que elimina un Autor
function eliminaAutor(id_autor){

    cadenaEliminaAutor = "id_autor=" + id_autor;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/AutorEliminaControlador.php",
        data:cadenaEliminaAutor,
        success:function(datos){
            $('#muestraAutores').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalListaAutor.php');
        }
    });

}


//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarAutor(id_autor){
    $('#frmEliminaAutor').load('../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/ModalesAutor/ModalDecideEliminar.php?id_autor=' + id_autor);
}

