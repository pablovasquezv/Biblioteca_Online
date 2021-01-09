<?php

    require('../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $nombre_pto_intercambio = $_POST['nombre_pto_intercambio'];
    $direccion_pto_intercambio = $_POST['direccion_pto_intercambio'];
    $id_ciudadTPI = $_POST['id_ciudadTPI'];

    $puntoIntercambioPDO->agregaPuntoIntercambio($nombre_pto_intercambio, $direccion_pto_intercambio, $id_ciudadTPI );

    

?>