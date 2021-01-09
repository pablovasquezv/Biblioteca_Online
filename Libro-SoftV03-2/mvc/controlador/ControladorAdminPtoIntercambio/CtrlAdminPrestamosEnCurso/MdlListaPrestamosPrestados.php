<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');


$prestamoPDO = new PrestamoPDO();


session_start();
$id_pto_intercambio = $_SESSION['id_pto_intercambio'];

$estado_prestamo = "Prestado";

$listadoprestamos = $prestamoPDO->obtienePrestamoSegunEstadoPrestamo($id_pto_intercambio, $estado_prestamo);


?>      

    <table class="table table-sm table-bordered table-responsive table-striped ">
        <tr class="table-active">
            <th>ID Prestamo</th>
            <th>Titulo Libro</th>
            <th>Dueño Libro</th>            
            <th>Información Prestamo</th>
            <th>Punto Intercambio</th>
            <th>Estado Prestamo</th>
            <th>Detalle</th>
            <th>Cambiar Estado</th>
                         
        </tr>

<?php           
    foreach($listadoprestamos as $row){ 

?>
        <!-- Este el el contenido de la tabla -->
        <tr>
            <td><?php echo $row["id_prestamo"]; ?></td>
            <td><?php echo $row["titulo_libro"]; ?></td>     
            <td><?php echo $row["Nombre_prestador"] . " " . $row["Apellido_prestador"];  ?></td>
            
            
            <td>
                <?php
                    if ($row["nombre_estado_prestamo"] == "Prestado") {
                        echo "Libro entregado al prestatario de forma exitosa. Prestamo en curso.";
                    }
                ?>


            </td>
            <td><?php echo $row["nombre_pto_intercambio"]; ?></td> 
            <td><?php echo $row["nombre_estado_prestamo"]; ?></td> 
            <td><button class="btn btn-dark btn-sm" onclick="cargaModalModificaEstadoPrestamo(<?php echo $row['id_prestamo']; ?>)"  data-toggle="modal" data-target="#ModalModificaEstadoPrestamo">Cambiar Estado</button></td>
            <td><button class="btn btn-success btn-sm" onclick="cargaModalDetallePrestamoEnCursoAdmin(<?php echo $row['id_prestamo']; ?>)"  data-toggle="modal" data-target="#ModalDetallePrestamoEnCursoAdmin">Detalle</button></td>  
            
        </tr>
    
<?php  } ?>

    </table>