<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $listadoRegiones = $regionPDO->obtieneRegiones();

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID Región</th>
                <th>Nombre Region</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoRegiones as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_region']; ?> </td>
                <td> <?php echo $row['nombre_region']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarRegion(<?php echo $row['id_region']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarRegion">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaRegion(<?php echo $row['id_region']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaRegion">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>