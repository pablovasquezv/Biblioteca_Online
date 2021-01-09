$(document).ready(function(){
    $('#muestraLibros').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalListaLibros.php');
});

function cargaModalModificaLibro(id_libro){
    $('#frmModificaLibro').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalModificaLibros.php?id_libro=' + id_libro);
}

//Funcion que Modifica datos de un Libro
function modificaLibro(id_libro){

    //id_region = $('#id_region').val();

    titulo_libro = $('titulolibro').val();
    fecha_lanzamiento_libro = $('fechaLanzamientoLibro').val();
    num_paginas_libro = $('numPaginasLibro').val();
    descripcion_libro = $('descripcionLibro').val();
    id_autorTL = $('idAutorTL').val();
    id_generoTL = $('idGeneroTL').val();
    id_editorialTL = $('idEditorialTL').val();
    rut_usuarioTL = $('rutUsuarioTL').val();

    cadenaModificaLibro = "id_libro=" + id_libro +
                          "&titulo_libro=" + titulo_libro +
                          "&fecha_lanzamiento_libro=" + fecha_lanzamiento_libro +
                          "&num_paginas_libro=" + num_paginas_libro +
                          "&descripcion_libro=" + descripcion_libro + 
                          "&id_autorTL=" + id_autorTL +
                          "&id_generoTL=" + id_generoTL +
                          "&id_editorialTL=" + id_editorialTL +
                          "&rut_usuarioTL=" + rut_usuarioTL;

    $.ajax({    
        type:"POST",
        url:'../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroModificaControlador.php',
        data:cadenaModificaLibro,
        success:function(datos){
            $('#muestraLibros').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalListaLibros.php');
        }
    });
}


//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarLibro(id_libro){
    $('#frmEliminaLibro').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalDecideEliminar.php?id_libro=' + id_libro);
}

//Funcion que elimina un Genero
function eliminaLibro(id_libro){

    cadenaEliminaLibro = "id_libro=" + id_libro;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroEliminaControlador.php",
        data:cadenaEliminaLibro,
        success:function(datos){
            $('#muestraLibros').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalListaLibros.php');
        }
    });
}



function eliminaLibro(id_libro){

    cadenaEliminaLibro = "id_libro=" + id_libro;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroEliminaControlador.php",
        data:cadenaEliminaLibro,
        success:function(datos){
            $('#muestraLibros').load('../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/ModalesLibros/ModalListaLibros.php');
        }
    });
}
/*********************************************************************/
//Funciones Para seccion usuario normal
$(document).ready(function(){
    $('#muestraLibrosPersonales').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaLibrosUsuarioNormal.php');
});

$(document).ready(function(){
    $('#muestraBibliotecaLibroSoft').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaTodosLosLibros.php');
});

//Funcion que carga el Modal Decide Eliminar Region
function cargaModalDecideEliminarLibro(id_libro){
    $('#frmEliminaLibro').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalDecideEliminarUsuarioNormal.php?id_libro=' + id_libro);
}

function eliminaLibroUsuarioNormal(id_libro){

    cadenaEliminaLibro = "id_libro=" + id_libro;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroEliminaControlador.php",
        data:cadenaEliminaLibro,
        success:function(datos){
            $('#muestraLibrosPersonales').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaLibrosUsuarioNormal.php');
        }
    });
}

function cargaModalModificaLibroUsuarioNormal(id_libro){
    $('#frmModificaLibro').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalModificaLibroUsuarioNormal.php?id_libro=' + id_libro);
}

function cargaModalAgregaLibro(){
    $('#frmAgregaLibro').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalAgregaLibroUsuarioNormal.php');
}