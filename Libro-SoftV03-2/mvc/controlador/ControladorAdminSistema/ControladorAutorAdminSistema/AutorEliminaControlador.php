<?php

    require_once("../../../modelo/AutorPDO.php");

    $autorPDO = new AutorPDO();

    $id_autor = $_POST['id_autor'];

    $autorPDO->eliminaAutor($id_autor);

?>