<?php

    require_once("../../../modelo/GeneroPDO.php");

    $generoPDO = new GeneroPDO();

        if(isset($_POST['AgregaGeneroUsuarioNormal'])){

            $id_genero_mula = 0;
            $nombre_genero = $_POST['nombre_genero'];

            $generoPDO->agregaGenero($id_genero_mula, $nombre_genero);

            echo $_POST['AgregaGeneroUsuarioNormal'];

        }else{

            $id_genero_mula = 0;
            $nombre_genero = $_POST['nombre_genero'];

            $generoPDO->agregaGenero($id_genero_mula, $nombre_genero);

            header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaGeneros/FrmGenerosAdminSistema.php");
            
        }
           


?>