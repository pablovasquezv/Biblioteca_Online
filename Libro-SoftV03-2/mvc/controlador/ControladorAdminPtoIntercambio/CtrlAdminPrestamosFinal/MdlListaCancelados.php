<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');


$prestamoPDO = new PrestamoPDO();


session_start();
$id_pto_intercambio = $_SESSION['id_pto_intercambio'];

$estado_prestamo = "Petición Cancelada";

$listadoprestamos = $prestamoPDO->obtienePrestamoSegunEstadoPrestamo($id_pto_intercambio, $estado_prestamo);


?>      

    <table class="table table-sm table-bordered table-responsive table-striped">
        <tr class="table-active">
            <th>ID Prestamo</th>
            <th>Titulo Libro</th>
            <th>Dueño Libro</th>
            <th>Estado Prestamo</th>
            <th>Información Prestamo</th>
            <th>Punto Intercambio</th>
            <th>Detalle</th>
                         
        </tr>

<?php           
    foreach($listadoprestamos as $row){ 

?>
        <!-- Este el el contenido de la tabla -->
        <tr>
            <td><?php echo $row["id_prestamo"]; ?></td>
            <td><?php echo $row["titulo_libro"]; ?></td>         

            <td><?php echo $row["Nombre_prestador"] . " " . $row["Apellido_prestador"];  ?></td>
            <td><?php echo $row["nombre_estado_prestamo"]; ?></td> 
            <td>
                <?php
                    if ($row["nombre_estado_prestamo"] == "Petición Rechazada") {
                        echo "El dueño del libro rechazó la petición de prestamo.";
                    }else if($row["nombre_estado_prestamo"] == "Petición Cancelada"){
                        echo "El pretatario canceló la petición antes de ser aceptada por el dueño.";
                    }
                ?>


            </td>
            <td><?php echo $row["nombre_pto_intercambio"]; ?></td> 
            <td><button class="btn btn-success" onclick="cargaModalDetallePrestamoEnCursoAdmin(<?php echo $row['id_prestamo']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDetallePrestamoEnCursoAdmin">Detalle</button></td>  
           
        </tr>
    
<?php  } ?>

    </table>