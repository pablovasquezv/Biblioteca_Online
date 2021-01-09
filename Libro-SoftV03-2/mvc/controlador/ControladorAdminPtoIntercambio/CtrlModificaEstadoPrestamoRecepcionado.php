<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../modelo/PrestamoPDO.php');

    $prestamoPDO = new PrestamoPDO();

    $id_prestamo = $_POST['id_prestamo'];
    $id_estado_prestamo = $_POST['id_estado_prestamoTP'];
    $fecha_inicio_prestamo = $_POST['fecha_inicio_prestamo'];
    $fecha_termino_prestamo = $_POST['fecha_termino_prestamo'];

    /*echo "id prestamo: " . $id_prestamo . "<br>";
    echo "id_estado_prestamo: " . $id_estado_prestamo . "<br>";
    echo "fecha_inicio_prestamo: " . $fecha_inicio_prestamo . "<br>";
    echo "fecha_termino_prestamo: " . $fecha_termino_prestamo . "<br>";*/

    $prestamoPDO->actualizaEstadoPrestamoRecepcionado($id_prestamo, $id_estado_prestamo, $fecha_inicio_prestamo, $fecha_termino_prestamo);


?>