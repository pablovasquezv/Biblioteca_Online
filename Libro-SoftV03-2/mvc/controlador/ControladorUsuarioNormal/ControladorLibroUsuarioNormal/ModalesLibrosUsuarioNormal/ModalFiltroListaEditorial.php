<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require_once("../../../../modelo/LibroPDO.php");

$libroPDO = new LibroPDO();

$id_editorial =  $_GET['id_editorial'];


$listadoLibros = $libroPDO->obtieneLibrosFiltroEditorial($id_editorial);


?>      

    <table class="table">
        <tr class="table-active">
            <th>ID</th>
            <th>Titulo</th>
            <th>Autor</th>
            <th>Genero</th>
            <th>Editorial</th>
            <th>Páginas</th>
            <th>Ver Libro</th>
                         
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
            
            <td><a href="../../../vista/VistasUsuarioNormal/VistasBibliotecaPublica/FrmLibroDetalle.php"><button onclick="cargaLibroDetalle(<?php echo $row['id_libro']; ?>)" class="btn btn-primary btn-sm">Ver Libro</button></a></td>
        </tr>
    
<?php  } ?>

    </table>