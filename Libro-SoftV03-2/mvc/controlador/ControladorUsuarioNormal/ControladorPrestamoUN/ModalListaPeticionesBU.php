<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../modelo/PrestamoPDO.php');
require('../../../modelo/UsuariosPDO.php');

$prestamoPDO = new PrestamoPDO();
$usuarioPDO = new UsuariosPDO();

session_start();
$rut_usuario = $_SESSION['rut_usuario'];

$listadoprestamos = $prestamoPDO->obtienePrestamoPorRutPrestatario($rut_usuario);


?>      

    <table class="table table-responsive">
        <tr class="table-active">
            <th>ID Prestamo</th>
            <th>Titulo Libro</th>
            <th>Dueño Libro</th>
            <th>Estado Prestamo</th>
            <th>Cancelar Peticion</th>
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

            <td><?php echo $row["Nombre_prestador"] . " " . $row["Apellido_prestador"];  ?></td>
            <td><?php echo $row["nombre_estado_prestamo"]; ?></td>  
            <td>
           <?php 
           if ($row["nombre_estado_prestamo"] == "En espera respuesta petición") {?>
            <button class="btn btn-danger " onclick="ModalCancelaPeticion(<?php echo $row['id_prestamo']; ?>)"  data-toggle="modal" data-target="#ModalCancelaPetcion" >Cancelar</button>
           <?php }
           
           
           ?>
        </td>
        </tr>
    
<?php  } ?>

    </table>