<?php

    require('../../../modelo/PrestamoPDO.php');

    //Creo los objetos para acceder a las funciones de las clases
    
    $prestamoPDO = new PrestamoPDO();
    
    //Obtengo la id del libro seleccionado en el listado
    $id_prestamo = $_POST['id_prestamo'];
    
    //Consulta si existe un registro de prestamo en la tabla prestamos
    $resultadoLibroPrestamo = $prestamoPDO->actualizaCancelaPrestamo($id_prestamo, 3);
    
?>