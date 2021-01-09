<?php

    require_once("../../../modelo/GeneroPDO.php");

    $generoPDO = new GeneroPDO();

    $id_genero = $_POST['id_genero'];
    $nombre_genero = $_POST['nombre_genero'];

    $generoPDO->actualizaGenero($id_genero, $nombre_genero);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaGeneros/FrmGenerosAdminSistema.php");

?>