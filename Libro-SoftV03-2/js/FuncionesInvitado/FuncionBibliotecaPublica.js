$(document).ready(function(){
    $('#frmListadoBibliotecaInvitado').load('mvc/controlador/ControladorInvitado/ModalBibliotecaPublica/ModalListaTodosLosLibrosPublico.php');
});

$(buscar_datos());

function buscar_datos(consulta){
    $.ajax({
        url:'mvc/controlador/ControladorInvitado/ModalBibliotecaPublica/ModalListaLibrosBuscados.php',
        type: 'POST',
        dataType:'html',
        data:{consulta: consulta},
    })
    .done(function(respuesta){
        $("#frmListadoBibliotecaInvitado").html(respuesta);
    })
    .fail(function(){
        console.log("error");
    });
}

$(document).on('keyup', "#cuadro_busqueda", function(){
    var valor = $(this).val();
    if(valor != ""){
        buscar_datos(valor);
    }else{
        $('#frmListadoBibliotecaInvitado').load('mvc/controlador/ControladorInvitado/ModalBibliotecaPublica/ModalListaTodosLosLibrosPublico.php');
    }
});