<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');


$prestamoPDO = new PrestamoPDO();


session_start();
$id_pto_intercambio = $_SESSION['id_pto_intercambio'];

$listadoprestamos = $prestamoPDO->obtienePrestamoEnCursoPorIdPtoIntercambio($id_pto_intercambio);


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
                    if ($row["nombre_estado_prestamo"] == "Petición Aceptada") {
                        echo "En espera recepción libro en punto de intercambio seleccionado por parte del dueño.";
                    }else if($row["nombre_estado_prestamo"] == "En espera respuesta petición"){
                        echo "Petición aún no es aceptada por una de las partes.";
                    }else if($row["nombre_estado_prestamo"] == "Espera retiro prestatario"){
                        echo "Libro en el punto de intercambio, en espera retiro por parte del solicitante.";
                    }else if($row["nombre_estado_prestamo"] == "Prestado"){
                        echo "Libro entregado al prestatario de forma exitosa. Prestamo en curso.";
                    }else if($row["nombre_estado_prestamo"] == "Devuelto a pto intercambio"){
                        echo "Libro devuelto en punto de intercambio. En espera retiro por parte del dueño.";
                    }
                ?>


            </td>
            <td><?php echo $row["nombre_pto_intercambio"]; ?></td> 
            <td><button class="btn btn-success" onclick="cargaModalDetallePrestamoEnCursoAdmin(<?php echo $row['id_prestamo']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDetallePrestamoEnCursoAdmin">Detalle</button></td>  
           
        </tr>
    
<?php  } ?>

    </table>