<?php

    require_once("../../../modelo/EditorialPDO.php");

    $editorialPDO = new EditorialPDO();

        if(isset($_POST['AgregaEditorialUsuarioNormal'])){
            
            $id_editorial_mula = 0;
            $nombre_editorial = $_POST['nombre_editorial'];
    
            $editorialPDO->agregaEditorial($id_editorial_mula, $nombre_editorial);

            echo $_POST['AgregaEditorialUsuarioNormal'];

        }else{

            $id_editorial_mula = 0;
            $nombre_editorial = $_POST['nombre_editorial'];
    
            $editorialPDO->agregaEditorial($id_editorial_mula, $nombre_editorial);
        
            header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaEditoriales/FrmEditorialAdminSistema.php");

        }


        


?>