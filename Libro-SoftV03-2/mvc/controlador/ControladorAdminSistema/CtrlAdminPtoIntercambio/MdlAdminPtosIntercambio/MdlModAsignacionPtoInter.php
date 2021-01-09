<?php

$rut_usuario = $_GET['rut_usuario'];

    //Agrego el archivo PuntoIntercambioPDO y rellenar el ComboBox 
    require('../../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $puntosIntercambio = $puntoIntercambioPDO->obtienePuntosIntercambio();


?>

<table class="table table-borderless table-responsive">
    <tr>
    <hr>
    </tr>
        <td>Asignar Pto Intercambio Nuevo:</td>
        <td>
        <select class="form-control" id="id_pto_intercambioTAPI"  required>
            <option value="">Ptos Intercambio...</option>

                <?php           
                    foreach($puntosIntercambio as $row){ ?>

                        <option value="<?php echo $row['id_pto_intercambio'];?>"><?php echo $row['nombre_pto_intercambio'];?></option>    

                <?php  } ?>      
                            
        </select>
    </td>                
    <tr>
        <td></td>
        <td><button onclick="modificaAsignacionPtoIntercambio('<?php echo $rut_usuario;?>')" data-dismiss="modal" class="btn btn-success btn">Modificar Asignación Punto Intercambio</button></td>
        
    </tr>
</table>        
