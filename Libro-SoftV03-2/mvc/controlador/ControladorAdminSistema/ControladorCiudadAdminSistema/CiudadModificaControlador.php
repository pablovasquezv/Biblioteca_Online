<?php

    require('../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $id_ciudad = $_POST['id_ciudad'];
    $nombre_ciudad = $_POST['nombre_ciudad'];
    $id_regionTC = $_POST['id_regionTC'];

    $ciudadPDO->actualizaCiudad($nombre_ciudad, $id_regionTC, $id_ciudad);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaCiudades/FrmCiudadesAdminSistema.php");

?>