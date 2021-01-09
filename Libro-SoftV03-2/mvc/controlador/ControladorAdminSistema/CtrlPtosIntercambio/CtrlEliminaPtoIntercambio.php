<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../modelo/PuntoIntercambioPDO.php');

    $id_pto_intercambio = $_POST['id_pto_intercambio'];

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $puntoIntercambioPDO->eliminaPuntoIntercambio($id_pto_intercambio);


?>