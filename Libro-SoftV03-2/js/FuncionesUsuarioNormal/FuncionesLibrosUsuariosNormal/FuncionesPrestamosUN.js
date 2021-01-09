$(document).ready(function(){
    $('#frmPeticionesBibliotecaPublica').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListaPeticionesBU.php');
});

$(document).ready(function(){
    $('#frmPeticionesBibliotecaPublica2').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListaPeticionesBP.php');
});

$(document).ready(function(){
    $('#frmListadoPrestamosAceptadosEC').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListPetAcepEC.php');
});

$(document).ready(function(){
    $('#FrmAceptaPeticion').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalAceptaPeticion.php');
});

function cargaModalAceptaPeticion(id_prestamo){
    $('#FrmAceptaPeticion').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalAceptaPeticion.php?id_prestamo=' + id_prestamo);
}

function cargaModalDetallePeticionEC(id_prestamo){
    $('#FrmDetallePeticionEC').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/MdlDepPrestEC.php?id_prestamo=' + id_prestamo);
}

function cargaModalRechazaPeticion(id_prestamo){
    $('#FrmRechazaPeticion').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/MdlRechPet.php?id_prestamo=' + id_prestamo);
}

//para cancelar peticion
function rechazaPeticionPrestamo(id_prestamo){

    cadenaRechazaPeticion = "id_prestamo=" + id_prestamo;

    $.ajax({
        type:"POST",
        url:"../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/CtrlRechazaPeticion.php",
        data:cadenaRechazaPeticion,
        success:function(datos){
            $('#frmPeticionesBibliotecaPublica2').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListaPeticionesBP.php');
        }
    });
}


function ModalCancelaPeticion(id_prestamo){
    $('#FrmCancelaPeticion').load('../../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/MdlCancela.php?id_prestamo=' + id_prestamo);
}


function CancelaPeticionPrestamo(id_prestamo){

    cadenaCancelaPeticion = "id_prestamo=" + id_prestamo;

    $.ajax({
        type:"POST",
        url:"../../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/CtrlCancelaPeticion.php",
        data:cadenaCancelaPeticion,
        success:function(datos){
            $('#frmPeticionesHechasPorMiEnEsperaRespuesta').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPeticionesEnEspera.php');
        }
    });
}

//Función carga listado de prestamos en curso hecho por el usuario normal hacia la comunidad
$(document).ready(function(){
    $('#frmPrestamosHaciaLaBibliotecaPublica').load('../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListaPrestamoEnCurso.php');
});

//Función carga modal con detalle Prestamos en Curso
function cargaModalDetallePrestamoEnCurso(id_prestamo){
    $('#frmModalDetallePrestamoEnCurso').load('../../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ModalListaDetallePrestamoEnCurso.php?id_prestamo=' + id_prestamo);
}

