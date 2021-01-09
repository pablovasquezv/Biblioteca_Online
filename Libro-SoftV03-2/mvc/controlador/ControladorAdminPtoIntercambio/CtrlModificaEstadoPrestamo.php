<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../modelo/PrestamoPDO.php');

    $prestamoPDO = new PrestamoPDO();

    $id_prestamo = $_POST['id_prestamo'];
    $id_estado_prestamo = $_POST['id_estado_prestamoTP'];

    $prestamoPDO->actualizaEstadoPrestamoGenerico($id_prestamo, $id_estado_prestamo);


?>