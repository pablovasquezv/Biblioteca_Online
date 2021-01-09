<?php

    require("../../../modelo/EditorialPDO.php");

    $editorialPDO = new EditorialPDO();

    $id_editorial = $_POST['id_editorial'];

    $editorialPDO->eliminaEditorial($id_editorial);

?>