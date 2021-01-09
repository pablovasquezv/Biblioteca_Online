<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../../modelo/AutorPDO.php");

    $autorPDO = new AutorPDO();

    $listadoAutores = $autorPDO->obtieneAutores();

?>      

        <table class="table">
            <tr class="table-active">
                <th>ID Autor</th>
                <th>Nombre Autor</th>
                <th>Apellido Autor</th>
                <th>Fecha Nacimiento</th>
                <th>Nacionalidad</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoAutores as $row){ ?>

            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['id_autor']; ?> </td>
                <td> <?php echo $row['nombre_autor']; ?> </td>
                <td> <?php echo $row['apellido_autor']; ?> </td>
                <td> <?php echo $row['fecha_nacimiento_autor']; ?> </td>
                <td> <?php echo $row['nacionalidad']; ?> </td>
                <td> <button onclick="cargaModalDecideEliminarAutor(<?php echo $row['id_autor']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarAutor">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaAutor(<?php echo $row['id_autor']; ?>)" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaAutor">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>