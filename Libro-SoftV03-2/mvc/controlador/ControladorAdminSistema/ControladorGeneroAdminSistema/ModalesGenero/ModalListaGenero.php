<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../../modelo/GeneroPDO.php");

    $generoPDO = new GeneroPDO();

    $listadoGeneros = $generoPDO->obtieneGeneros();

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID Genero</th>
                <th>Nombre Genero</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoGeneros as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_genero']; ?> </td>
                <td> <?php echo $row['nombre_genero']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarGenero(<?php echo $row['id_genero']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarGenero">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaGenero(<?php echo $row['id_genero']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaGenero">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>