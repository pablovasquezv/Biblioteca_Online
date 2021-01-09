<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');


$prestamoPDO = new PrestamoPDO();


session_start();
$rut_usuario = $_SESSION['rut_usuario'];

$listadoprestamos = $prestamoPDO->obtienePrestamoPorRutPrestador($rut_usuario);


?>      

    <table class="table table-responsive">
        <tr class="table-active">
            <th>ID Prestamo</th>
            <th>Titulo Libro</th>
            <th>Solicitante</th>
            <th>Aceptar</th>
            <th>Rechazar</th>
            <th></th>
            <th></th>
                         
        </tr>

<?php           
    foreach($listadoprestamos as $row){ 

?>
        <!-- Este el el contenido de la tabla -->
        <tr>
            
            <td><?php echo $row["id_prestamo"]; ?></td>   
            <td><?php echo $row["titulo_libro"]; ?></td>         

            <td><?php echo $row["Nombre_prestatario"] . " " . $row["Apellido_prestatario"];  ?></td>
            <td><button class="btn btn-success" onclick="cargaModalAceptaPeticion(<?php echo $row['id_prestamo']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalAceptaPeticion">Aceptar</button></td>
            <td><button class="btn btn-danger" onclick="cargaModalRechazaPeticion(<?php echo $row['id_prestamo']; ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalRechazaPeticion">Rechazar</button></td>  
           
        </tr>
    
<?php  } ?>

    </table>