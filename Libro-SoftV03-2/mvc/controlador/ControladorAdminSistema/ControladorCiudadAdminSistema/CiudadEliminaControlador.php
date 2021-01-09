<?php

    require('../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $id_ciudad = $_POST['id_ciudad'];

    $ciudadPDO->eliminaCiudad($id_ciudad);


?>