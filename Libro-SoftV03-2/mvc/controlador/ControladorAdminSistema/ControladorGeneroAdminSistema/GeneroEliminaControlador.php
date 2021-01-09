<?php

    require("../../../modelo/GeneroPDO.php");

    $generoPDO = new GeneroPDO();

    $id_genero = $_POST['id_genero'];

    $generoPDO->eliminaGeneros($id_genero);

?>