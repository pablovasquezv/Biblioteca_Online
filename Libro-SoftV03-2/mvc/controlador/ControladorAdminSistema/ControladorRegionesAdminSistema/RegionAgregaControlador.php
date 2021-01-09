<?php

    require('../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $id_region = $_POST['id_region'];
    $nombre_region = $_POST['nombre_region'];

    $regionPDO->agregaRegion($id_region, $nombre_region);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaRegiones/FrmRegionesAdminSistema.php");

?>