$(buscar_datos());

function buscar_datos(consulta){
    $.ajax({
        url:'../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/MdlListaLibrosPersonalesBuscados.php',
        type: 'POST',
        dataType:'html',
        data:{consulta: consulta},
    })
    .done(function(respuesta){
        $("#muestraLibrosPersonales").html(respuesta);
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
        $('#muestraLibrosPersonales').load('../../../controlador/ControladorUsuarioNormal/ControladorLibroUsuarioNormal/ModalesLibrosUsuarioNormal/ModalListaLibrosUsuarioNormal.php');
    }
});