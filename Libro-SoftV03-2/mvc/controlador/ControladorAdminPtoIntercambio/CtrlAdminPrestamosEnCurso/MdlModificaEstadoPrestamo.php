<?php

    $id_prestamo = $_GET['id_prestamo'];

    //Agrego el archivo PuntoIntercambioPDO y rellenar el ComboBox 
    require('../../../modelo/EstadoPrestamoPDO.php');

    $estadoPrestamoPDO = new EstadoPrestamoPDO();

    $estadosPrestamo = $estadoPrestamoPDO ->obtieneEstadosPrestamos();


?>

<table class="table table-borderless table-responsive">

     </tr>
        <td>Modificar Estado Prestamo:</td>
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
        <td><button onclick="modificaEstadoPrestamo('<?php echo $id_prestamo;?>')" data-dismiss="modal" class="btn btn-success btn">Modificar Estado Prestamo</button></td>
        
    </tr>
</table>        
