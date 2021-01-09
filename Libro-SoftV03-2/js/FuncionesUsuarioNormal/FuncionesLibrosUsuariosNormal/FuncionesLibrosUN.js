$(document).ready(function(){
    $('#frmFiltros').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalFiltrosLibrosUN.php');
});


//Funcion que filtra libros segun autor
function filtraAutor(){

    id_autor = $('#id_autor option:selected').val();

    $(document).ready(function(){
        $('#muestraBibliotecaLibroSoft').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaFiltroAutor.php?id_autor=' + id_autor);
    });
}

//Funcion que filtra libros segun el genero
function filtraGenero(){

    id_genero = $('#id_genero option:selected').val();

    $(document).ready(function(){
        $('#muestraBibliotecaLibroSoft').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaFiltroGenero.php?id_genero=' + id_genero);
    });
}

//Funcion que filtra libros segun la editorial
function filtraEditorial(){

    id_editorial = $('#id_editorial option:selected').val();

    $(document).ready(function(){
        $('#muestraBibliotecaLibroSoft').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalFiltroListaEditorial.php?id_editorial=' + id_editorial);
    });
}


//Función que carga el detalle del libro seleccionado en el listado
function cargaLibroDetalle(id_libro){
    $('#frmLibroDetalle').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalDetalleLibro.php?id_libro=' + id_libro);
}

function cargaPeticionPrestamo(id_libro){
    $('#frmPeticionPrestamo').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalPeticionPrestamo.php?id_libro=' + id_libro);
}

//Funcion que carga el Modal Agrega Autor
function cargaModalAgregaAutor(){
    $('#frmAgregaAutor').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/MdlAgregaAGE/MdlAgregaAutorUN.php');
}

//Funcion que Modifica datos de un Autor
function agregarAutor(){

    
    nombre_autor = $('#nombreAutor').val();
    apellido_autor = $('#apellidoAutor').val();
    fecha_nacimiento_autor = $('#fechaNacimientoAutor').val();
    nacionalidad = $('#nacionalidadAutor').val();

    if(nombre_autor == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else if(apellido_autor == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else if(fecha_nacimiento_autor == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else if(nacionalidad == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else{
        cadenaAgregaAutor = "AgregaAutorUsuarioNormal=" + "Si" +
                            "&nombre_autor=" + nombre_autor +
                            "&apellido_autor=" + apellido_autor +
                            "&fecha_nacimiento_autor=" + fecha_nacimiento_autor +
                            "&nacionalidad=" + nacionalidad;

        $.ajax({    
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/AutorAgregaControlador.php",
            data:cadenaAgregaAutor,
            success:function(datos){
                alert("AUTOR AGREGADO CON ÉXITO AL SISTEMA.");
            }
        });
    }    
}

//Funcion que carga el Modal Agrega Región
function cargaModalAgregaGenero(){
    $('#frmAgregaGenero').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/MdlAgregaAGE/MdlAgregaGeneroUN.php');
}

function agregarGenero(){

    nombre_genero = $('#nombreGenero').val();

    if(nombre_genero == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else{
        cadenaAgregaGenero = "AgregaGeneroUsuarioNormal=" + "Si" +
                             "&nombre_genero=" + nombre_genero;

        $.ajax({    
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/GeneroAgregaControlador.php",
            data:cadenaAgregaGenero,
            success:function(datos){
                alert("GENERO AGREGADO CON ÉXITO AL SISTEMA.");
            }
        });
    }
    
}

//Funcion que carga el Modal Agrega Autor
function cargaModalAgregaEditorial(){
    $('#frmAgregaEditorial').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/MdlAgregaAGE/MdlAgregaEditorialUN.php');
}

//Funcion que Agrega Editorial
function agregarEditorial(){

    
    nombre_editorial = $('#nombreEditorial').val();

    if(nombre_editorial == ""){
        alert("Campo obligatorio. Por favor ingrese información requerida. Gracias.");
    }else{
        cadenaAgregaEditorial = "AgregaEditorialUsuarioNormal=" + "Si" +
                                "&nombre_editorial=" + nombre_editorial;

        $.ajax({    
            type:"POST",
            url:"../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialAgregaControlador.php",
            data:cadenaAgregaEditorial,
            success:function(datos){
                alert("EDITORIAL AGREGADA CON ÉXITO AL SISTEMA.");
            }
        });
    }

    
}