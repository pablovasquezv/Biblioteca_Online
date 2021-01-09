<?php

    require_once("../../../modelo/LibroPDO.php");

    $libroPDO = new LibroPDO();

    $id_libro = $_POST['id_libro'];

    $libroPDO->eliminaLibro($id_libro); 
?>