<?php
    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $id_pto_intercambio = $_POST['id_pto_intercambio'];
    $nombre_pto_intercambio = $_POST['nombre_pto_intercambio'];
    $direccion_pto_intercambio = $_POST['direccion_pto_intercambio'];
    $id_ciudadTPI = $_POST['id_ciudadTPI'];

    $listadoPuntosIntercambio = $puntoIntercambioPDO->actualizaPuntosIntercambio($id_pto_intercambio, $nombre_pto_intercambio, $direccion_pto_intercambio, $id_ciudadTPI);

?>