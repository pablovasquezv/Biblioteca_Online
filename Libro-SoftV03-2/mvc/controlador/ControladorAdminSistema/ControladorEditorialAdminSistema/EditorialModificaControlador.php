<?php

    require_once("../../../modelo/EditorialPDO.php");

    $editorialPDO = new EditorialPDO();

    $id_editorial = $_POST['id_editorial'];
    $nombre_editorial = $_POST['nombre_editorial'];

    $editorialPDO->actualizaEditorial($id_editorial, $nombre_editorial);

    header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaEditoriales/FrmEditorialAdminSistema.php");


?>