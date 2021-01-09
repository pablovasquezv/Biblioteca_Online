<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');


$prestamoPDO = new PrestamoPDO();


session_start();
$rut_usuario = $_SESSION['rut_usuario'];

$listadoprestamos = $prestamoPDO->obtienePrestamoAceptadosPorRutPrestador($rut_usuario);


?>      

    <table class="table table-responsive">
        <tr class="table-active">
            <th>Titulo Libro</th>
            <th>Prestado a</th>
            <th>Estado Prestamo</th>
            <th>Acción Recomendada</th>
            <th>Punto Intercambio</th>
            <th>Detalle</th>
                         
        </tr>

<?php           
    foreach($listadoprestamos as $row){ 

?>
        <!-- Este el el contenido de la tabla -->
        <tr>
            
            <td><?php echo $row["titulo_libro"]; ?></td>         

            <td><?php echo $row["Nombre_prestatario"] . " " . $row["Apellido_prestatario"];  ?></td>
            <td><?php echo $row["nombre_estado_prestamo"]; ?></td> 
            <td>
                <?php
                    if ($row["nombre_estado_prestamo"] == "Petición Aceptada") {
                        echo "En espera recepción libro en punto de intercambio seleccionado.";
                    }else if($row["nombre_estado_prestamo"] == "Petición Rechazada"){
                        echo "Prestamo Terminado: El dueño del libro ha rechazado la solicitud";
                    }else if($row["nombre_estado_prestamo"] == "Petición Cancelada"){
                        echo "";
                    }
                ?>


            </td>
            <td><?php echo $row["nombre_pto_intercambio"]; ?></td> 
            <td><button class="btn btn-success" onclick="cargaModalDetallePeticionEC(<?php echo $row['id_prestamo']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDetallePeticionEC">Detalle</button></td>  
           
        </tr>
    
<?php  } ?>

    </table>