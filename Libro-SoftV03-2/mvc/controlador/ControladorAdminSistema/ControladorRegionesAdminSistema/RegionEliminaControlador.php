<?php

    require('../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $id_region = $_POST['id_region'];

    $regionPDO->eliminaRegiones($id_region);


?>