//Funcion que carga el listado con todos los prestamos que estan en estado de espera respuesta. (Aun no han sido aceptados o rechazados).
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiEnEsperaRespuesta').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPeticionesEnEspera.php');
});


//Funcion que carga todos los prestamos que estan en estado Cancelados. (El prestatario solicitante se arrepintió antes de la respuesta).
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiCanceladas').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPeticionesCanceladas.php');
});

//Funcion que carga todos los prestamos que estan en estado Rechazados. (El dueño del libro no acepto la propuesta de prestamo).
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiRechazadas').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPeticionesRechazadas.php');
});

//Funcion que carga todos los prestamos que estan ACEPTADOS.
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiAceptadas').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPeticionesAceptados.php');
});

//Funcion que carga todos los prestamos que estan en ESPERA RETIRO POR PARTE DE PRESTATARIO (SOLICISTANTE) EN EL PUNTO DE INTERCAMBIO.
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiEnEsperaRetiroPrestatario').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaEsperaRetPrestatario.php');
});

//Funcion que carga todos los prestamos que estan en pleno proceso de prestamo en curso
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiPrestados').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPrestamosPrestados.php');
});

//Funcion que carga todos los prestamos que estan en pleno proceso de prestamo en curso
$(document).ready(function(){
    $('#frmPeticionesHechasPorMiDevueltos').load('../../../../controlador/ControladorUsuarioNormal/CtrlPrestamosNuevo/CtrlPeticionesHechosPorMI/MdlListaPrestamosDevueltos.php');
});