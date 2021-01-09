<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../../modelo/EditorialPDO.php");

    $editorialPDO = new EditorialPDO();

    $listadoEditoriales = $editorialPDO->obtieneEditoriales();

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID Editorial</th>
                <th>Nombre Editorial</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoEditoriales as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_editorial']; ?> </td>
                <td> <?php echo $row['nombre_editorial']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarEditorial(<?php echo $row['id_editorial']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarEditorial">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaEditorial(<?php echo $row['id_editorial']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaEditorial">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>