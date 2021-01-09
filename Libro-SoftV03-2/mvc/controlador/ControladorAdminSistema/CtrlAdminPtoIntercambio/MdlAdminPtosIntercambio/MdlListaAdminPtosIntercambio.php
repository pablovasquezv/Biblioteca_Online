<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/UsuariosPDO.php');

    $usuarioPDO = new UsuariosPDO();

    $listadoAdminPtosIntermcabio = $usuarioPDO->obtieneUsuariosAdminPtoIntercambio();


?>      

        <table class="table table-responsive">
            <tr class="table-active">
                <th>Rut</th>
                <th>Nombre</th>
                <th>Punto Intercambio</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Fecha Ingreso</th>
                <th>Detalle</th>
                <th>Eliminar</th>
                <th>Modificar</th>
            </tr>

<?php           
        foreach($listadoAdminPtosIntermcabio as $row){ 

            ?>
            <!-- Este el el contenido de la tabla -->
            <tr>
                <td> <?php echo $row['rut_usuario']; ?> 
                </td>
                <td> <?php echo $row['nombres_usuario'] . " " . $row['ap_paterno_usuario']; ?> </td>
                <td> <?php 
                
                        if($row['nombre_pto_intercambio'] == ""){
                            echo "Sin Asignación";
                        }else{
                            echo $row['nombre_pto_intercambio'];
                            ?> <button class="btn btn-outline-dark btn-sm" onclick="cargaModalModificaAsignacionPtoIntercambio('<?php echo $row['rut_usuario']; ?>')" data-toggle="modal" data-target="#ModalModificaAsignacionPtoIntercambio">Cambiar Pto Intercambio</button>  <?php
                        }
                
                     ?> 
                </td>

                <td> <?php echo $row['email']; ?> </td>
                
                <td> <?php echo $row['telefono_usuario']; ?> </td>
                <td> <?php echo $row['fecha_ingreso_usuario']; ?> </td>
                <td> <button onclick="cargaDetallesAdminPaginaDetalle('<?php echo $row['rut_usuario']; ?>')" class="btn btn-outline-dark btn-sm"  data-toggle="modal" data-target="#ModalDetallesAdminPtoIntercambio">Detalle</button></td>
                <td> <button onclick="cargaModalDecideEliminarAdminPtoInter('<?php echo $row['rut_usuario']; ?>', '<?php echo $row['id_usu_admin_pto_inter']; ?>')" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalDecideEliminarAdminPtoIntercambio">Eliminar</button></td>
                <td> <button onclick="cargaModalModificaPtoIntercambio('<?php echo $row['rut_usuario']; ?>')" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ModalModificaAdminPtoIntercambio">Modificar</button></td>
            </tr>
        
<?php  } ?>

        </table>