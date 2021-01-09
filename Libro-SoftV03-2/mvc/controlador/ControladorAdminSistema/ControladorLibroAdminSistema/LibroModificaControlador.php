<?php

    require_once("../../../modelo/LibroPDO.php");

    $libroPDO = new LibroPDO();

    if(isset($_POST['btn_update_libro'])){
        
        $id_libro = $_POST['hiddenId_libro'];
        $titulo_libro = $_POST['titulo_libro'];
        $fecha_lanzamiento_libro = $_POST['fecha_lanzamiento_libro'];
        $num_paginas_libro = $_POST['num_paginas_libro'];
        $descripcion_libro = $_POST['descripcion_libro'];
        $id_autorTL = $_POST['id_autorTL'];
        $id_generoTL = $_POST['id_generoTL'];
        $id_editorialTL = $_POST['id_editorialTL'];
        $rut_usuarioTL = $_POST['hiddenRut_usuarioTL'];

        $libroPDO->actualizaLibro($titulo_libro, $fecha_lanzamiento_libro, $num_paginas_libro, $descripcion_libro, $id_autorTL, $id_generoTL, $id_editorialTL, $rut_usuarioTL, $id_libro);
    
        header("Refresh:0; url=../../../vista/VistasAdminSistema/VistasAdminSistemaLibros/FrmLibrosAdminSistema.php");

    }else if(isset($_POST['btn_update_libro_usuario_normal'])){

        $id_libro = $_POST['hiddenId_libro'];
        $titulo_libro = $_POST['titulo_libro'];
        $fecha_lanzamiento_libro = $_POST['fecha_lanzamiento_libro'];
        $num_paginas_libro = $_POST['num_paginas_libro'];
        $descripcion_libro = $_POST['descripcion_libro'];
        $id_autorTL = $_POST['id_autorTL'];
        $id_generoTL = $_POST['id_generoTL'];
        $id_editorialTL = $_POST['id_editorialTL'];
        $rut_usuarioTL = $_POST['hiddenRut_usuarioTL'];

        $libroPDO->actualizaLibro($titulo_libro, $fecha_lanzamiento_libro, $num_paginas_libro, $descripcion_libro, $id_autorTL, $id_generoTL, $id_editorialTL, $rut_usuarioTL, $id_libro);
    
        header("Refresh:0; url=../../../vista/VistasUsuarioNormal/VistasBibliotecaPersonal/FrmBibliotecaPersonal.php");

    }

    if(isset($_POST['btn_agrega_libro_usuario_normal'])){

        //$id_libro = $_POST['hiddenId_libro'];
        $titulo_libro = $_POST['titulo_libro'];
        $fecha_lanzamiento_libro = $_POST['fecha_lanzamiento_libro'];
        $num_paginas_libro = $_POST['num_paginas_libro'];
        $descripcion_libro = $_POST['descripcion_libro'];
        $id_autorTL = $_POST['id_autorTL'];
        $id_generoTL = $_POST['id_generoTL'];
        $id_editorialTL = $_POST['id_editorialTL'];
        $rut_usuarioTL = $_POST['hiddenRut_usuarioTL'];

        //$libroPDO->actualizaLibro($titulo_libro, $fecha_lanzamiento_libro, $num_paginas_libro, $descripcion_libro, $id_autorTL, $id_generoTL, $id_editorialTL, $rut_usuarioTL, $id_libro);
    
        $libroPDO->agregaLibro($titulo_libro, $fecha_lanzamiento_libro, $num_paginas_libro, $descripcion_libro, $id_autorTL, $id_generoTL, $id_editorialTL, $rut_usuarioTL);

        header("Refresh:0; url=../../../vista/VistasUsuarioNormal/VistasBibliotecaPersonal/FrmBibliotecaPersonal.php");

    }


?>