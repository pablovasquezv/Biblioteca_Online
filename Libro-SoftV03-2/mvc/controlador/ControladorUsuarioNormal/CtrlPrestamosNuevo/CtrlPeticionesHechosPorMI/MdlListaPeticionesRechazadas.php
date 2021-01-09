<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require('../../../../modelo/PrestamoPDO.php');
require('../../../../modelo/UsuariosPDO.php');

$prestamoPDO = new PrestamoPDO();
$usuarioPDO = new UsuariosPDO();

session_start();
$rut_usuario = $_SESSION['rut_usuario'];

$estado_prestamo = "Petición Rechazada";

$listadoprestamos = $prestamoPDO->obtieneEstadoPrestamoPorRutPrestatarioNombreEstado($rut_usuario, $estado_prestamo);


?>      

    <table class="table table-sm table-bordered table-responsive table-striped ">
        <tr class="table-active">
            <th>ID Prestamo</th>
            <th>Titulo Libro</th>
            <th>Dueño Libro</th>
            <th>Estado Prestamo</th>
            <th>Información</th>   
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
            <td>Petición rechazada por el dueño del libro.</td>

        
        </tr>
    
<?php  } ?>

    </table>