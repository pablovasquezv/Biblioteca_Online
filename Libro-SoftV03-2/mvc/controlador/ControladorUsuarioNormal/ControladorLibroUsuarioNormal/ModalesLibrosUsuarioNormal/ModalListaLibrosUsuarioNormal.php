<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../../modelo/LibroPDO.php");

    $libroPDO = new LibroPDO();

    session_start();
    $rut_usuario = $_SESSION['rut_usuario'];

    $listadoLibros = $libroPDO->obtieneLibrosPersonales($rut_usuario);

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Editorial</th>
                <th>Páginas</th>
                <th>Eliminar</th>
                <th>Modificar</th>                
            </tr>

<?php           
        foreach($listadoLibros as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_libro']; ?> </td>
                <td> <?php echo $row['titulo_libro']; ?> </td>
                <td> <?php echo $row['nombre_autor'] . " " . $row['apellido_autor'];  ?> </td>
                <td> <?php echo $row['nombre_genero']; ?> </td>
                <td> <?php echo $row['nombre_editorial']; ?> </td>
                <td> <?php echo $row['num_paginas_libro']; ?> </td>
                
 
                <td> <button onclick="cargaModalDecideEliminarLibro(<?php echo $row['id_libro']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarLibro">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaLibroUsuarioNormal(<?php echo $row['id_libro']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaLibro">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>