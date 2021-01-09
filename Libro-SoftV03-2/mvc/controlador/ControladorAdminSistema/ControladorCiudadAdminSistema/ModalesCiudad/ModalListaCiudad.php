<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $listadoCiudadesRegiones = $ciudadPDO->obtieneCiudadesRegiones();

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID Ciudad</th>
                <th>Nombre Ciudad</th>
                <th>Nombre Región</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoCiudadesRegiones as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_ciudad']; ?> </td>
                <td> <?php echo $row['nombre_ciudad']; ?> </td>
                <td> <?php echo $row['nombre_region']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarCiudad(<?php echo $row['id_ciudad']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarCiudad">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaCiudad(<?php echo $row['id_ciudad']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaCiudad">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>