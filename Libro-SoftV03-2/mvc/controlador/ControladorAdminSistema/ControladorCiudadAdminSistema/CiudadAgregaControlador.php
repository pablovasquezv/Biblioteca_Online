<?php

    require('../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $nombre_ciudad = $_POST['nombre_ciudad'];
    $id_regionTC = $_POST['id_regionTC'];

    $ciudadPDO->agregaCiudad($nombre_ciudad, $id_regionTC);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaCiudades/FrmCiudadesAdminSistema.php");

?>