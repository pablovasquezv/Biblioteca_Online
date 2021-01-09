<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $listadoPuntosIntercambio = $puntoIntercambioPDO->obtienePuntosIntercambioCompleto();
?>      

        <table class="table table-responsive">
            <tr class="table-active">
                <th>ID</th>
                <th>Nombre Pto Intercambio</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Región</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoPuntosIntercambio as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_pto_intercambio']; ?> </td>
                <td> <?php echo $row['nombre_pto_intercambio']; ?> </td>
                <td> <?php echo $row['direccion_pto_intercambio']; ?> </td>
                <td> <?php echo $row['nombre_ciudad']; ?> </td>
                <td> <?php echo $row['nombre_region']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarPtoIntercambio(<?php echo $row['id_pto_intercambio']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarPtoIntercambio">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaPtoIntercambio(<?php echo $row['id_pto_intercambio']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaPtoIntercambio">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>