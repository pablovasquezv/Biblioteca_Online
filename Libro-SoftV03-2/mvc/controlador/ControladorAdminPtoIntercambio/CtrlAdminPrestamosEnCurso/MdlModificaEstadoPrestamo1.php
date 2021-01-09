<?php

    $id_prestamo = $_GET['id_prestamo'];
    $dias_prestamo = $_GET['dias_prestamo'];
    $fecha = date("Y-m-d");

    //Agrego el archivo PuntoIntercambioPDO y rellenar el ComboBox 
    require('../../../modelo/EstadoPrestamoPDO.php');

    $estadoPrestamoPDO = new EstadoPrestamoPDO();

    $estadosPrestamo = $estadoPrestamoPDO ->obtieneEstadosPrestamos();

?>

<table class="table table-sm table-bordered table-responsive table-striped">

    <tr>
        <td><b>Días prestamo definidos:</b></td>
        <td><?php echo $dias_prestamo; ?></td>
    </tr>
    <tr>
        <td><b>Fecha Inicio Prestamo</b></td>
        <td><input type="date" name="" id="fecha_inicio_prestamo" min="<?php echo date("Y-m-d"); ?>" value="<?php echo date("Y-m-d"); ?>"></td>
    </tr>
    <tr>
        <td><b>Fecha Inicio Termino</b></td>
        <td><input type="date" name="" id="fecha_termino_prestamo" value="<?php echo date("Y-m-d", strtotime($fecha. ' + '. $dias_prestamo .' days')); ?>"></td>
    </tr>
     <tr>
        <td><b>Estado Siguiente Recomendado:</b></td>
        <td>Espera retiro prestatario</td>
     </tr>
     </tr>
        <td><b>Estado Prestamo:</b></td>
        <td>
        <select class="form-control" id="id_estado_prestamoTP"  required>
            <option value="">Estados Prestamo...</option>

                <?php           
                    foreach($estadosPrestamo as $row){ ?>

                        <option value="<?php echo $row['id_estado_prestamo'];?>"><?php echo $row['nombre_estado_prestamo'];?></option>    

                <?php  } ?>      
                            
        </select>
    </td>                
    <tr>
        <td></td>
        <td><button onclick="modificaEstadoPrestamoRecepcionado('<?php echo $id_prestamo;?>')" data-dismiss="modal" class="btn btn-success btn">Modificar Estado Prestamo</button></td>
        
    </tr>
</table>        