//Funcion que carga el listado con los prestamos en curso
$(document).ready(function(){
    $('#frmListadoPrestamosEnCurso').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosEnCurso.php');
});

//Funcion que carga el listado con los prestamos en curso aceptados solamente
$(document).ready(function(){
    $('#frmListadoPrestamosAceptados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosAceptados.php');
});

//Funcion que carga el listado con los prestamos en curso que estan en espera de retiro en punto de intercambio por el prestatario
$(document).ready(function(){
    $('#frmListadoPrestamosEnEsperaRetiroPrestatario').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosEspRetPrest.php');
});

//Funcion que carga el listado con los prestamos que se han concretado, osea están prestados
$(document).ready(function(){
    $('#frmListadoPrestamosPrestados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosPrestados.php');
});

//Funcion que carga el listado con los prestamos que han sido devueltos por el prestatario al punto de intercambio
$(document).ready(function(){
    $('#frmListadoPrestamosDevueltosPtoIntercambio').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosDevueltos.php');
});


//Funcion que carga el listado con los prestamos que han terminado (cancelado, rechazado, robado, perdido o devuelto a dueño)
$(document).ready(function(){
    $('#frmListadoPrestamosTerminados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaPrestamosFin.php');
});

//Funcion que carga el listado con los prestamos que han terminado de forma exitosa
$(document).ready(function(){
    $('#frmListadoPrestamosTerminadosExitosamente').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaDevueltosExito.php');
});

//Funcion que carga el listado con los prestamos que han sido cancelados por el prestatario / solicitante
$(document).ready(function(){
    $('#frmListadoPrestamosCancelados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaCancelados.php');
});

//Funcion que carga el listado con los prestamos que han sido rechazados por el duenio del libro
$(document).ready(function(){
    $('#frmListadoPrestamosRechazados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaRechazados.php');
});

//Funcion que carga el listado con los libros perdidos del sistema
$(document).ready(function(){
    $('#frmListadoPrestamosPerdidos').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaPerdidos.php');
});

//Funcion que carga el listado con los libros robados del sistema
$(document).ready(function(){
    $('#frmListadoPrestamosRobados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosFinal/MdlListaRobados.php');
});


//Función que carga el modal para modificar estado del prestamo
function cargaModalModificaEstadoPrestamo(id_prestamo){
    $('#frmModificaEstadoPrestamo').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlModificaEstadoPrestamo.php?id_prestamo=' + id_prestamo);
}


//Funcion que modifica el estado de prestamo
//Además valida que los campos estés llenos antes de enviar 
function modificaEstadoPrestamo(id_prestamo){

    
    id_estado_prestamoTP = $('#id_estado_prestamoTP').val();

    //Validaciones de contenido
    if(id_estado_prestamoTP == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaModificaEstadoPrestamo = "id_prestamo=" + id_prestamo +
                                        "&id_estado_prestamoTP=" + id_estado_prestamoTP;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminPtoIntercambio/CtrlModificaEstadoPrestamo.php",
            data:cadenaModificaEstadoPrestamo,
            success:function(datos){                
                $('#frmListadoPrestamosAceptados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosAceptados.php');
            }
        });	
    }
                    
}

//Función carga modal con detalle Prestamos en Curso del la vista de administracion punto intercambio
function cargaModalDetallePrestamoEnCursoAdmin(id_prestamo){
    $('#frmModalDetallePrestamoEnCursoAdmin').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlDetallePrestamosEnCurso.php?id_prestamo=' + id_prestamo);
}


//Función que carga el modal para modificar estado del prestamo aceptado
function cargaModalModificaEstadoPrestamoAceptado(id_prestamo, dias_prestamo){
    $('#frmModificaEstadoPrestamoAceptado').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlModificaEstadoPrestamo1.php?id_prestamo=' + id_prestamo + '&dias_prestamo=' + dias_prestamo);
}

//Funcion que modifica el estado de prestamo
//Además valida que los campos estés llenos antes de enviar 
function modificaEstadoPrestamoRecepcionado(id_prestamo){

    fecha_inicio_prestamo = $('#fecha_inicio_prestamo').val();
    fecha_termino_prestamo = $('#fecha_termino_prestamo').val();
    id_estado_prestamoTP = $('#id_estado_prestamoTP').val();

    //Validaciones de contenido
    if(fecha_inicio_prestamo == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(fecha_termino_prestamo == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else if(id_estado_prestamoTP == ""){
        alert("Campo Obligatorio. Por favor ingrese información.");
    }else{

        cadenaModificaEstadoPrestamoRecepcionado = "id_prestamo=" + id_prestamo +
                                                   "&fecha_inicio_prestamo=" + fecha_inicio_prestamo +
                                                   "&fecha_termino_prestamo=" + fecha_termino_prestamo +
                                                   "&id_estado_prestamoTP=" + id_estado_prestamoTP;

        $.ajax({
            type:"POST",
            url:"../../../controlador/ControladorAdminPtoIntercambio/CtrlModificaEstadoPrestamoRecepcionado.php",
            data:cadenaModificaEstadoPrestamoRecepcionado,
            success:function(datos){                
                $('#frmListadoPrestamosAceptados').load('../../../controlador/ControladorAdminPtoIntercambio/CtrlAdminPrestamosEnCurso/MdlListaPrestamosAceptados.php');
            }
        });	
    }
                    
}