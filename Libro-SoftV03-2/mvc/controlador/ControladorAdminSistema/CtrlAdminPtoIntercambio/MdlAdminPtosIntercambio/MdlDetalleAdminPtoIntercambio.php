<?php

    

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/UsuariosPDO.php');

    $usuarioPDO = new UsuariosPDO();

    $rut_usuario = $_GET['rut_usuario'];

    $listadoAdminPtosIntermcabio = $usuarioPDO->obtieneUsuariosAdminPtoIntercambioPorRut($rut_usuario);

?>

<table class="table table-striped table-sm">
    <tr>
        <td></td>
        <td><b>DATOS PERSONALES</b></td>
    </tr>
    <tr>        
        <td><b>RUT:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['rut_usuario'] ?></td>
    </tr>
    <tr>
        <td><b>NOMBRES:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['nombres_usuario'] . " " . $listadoAdminPtosIntermcabio['ap_paterno_usuario']; ?></td>
    </tr>
    <tr>
        <td></td>
        <td><b>ADMINISTRADOR DEL PUNTO DE INTERCAMBIO</b></td>
    </tr>
    <tr>
        <td><b>PTO INTERCAMBIO:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['nombre_pto_intercambio'] ?></td>
    </tr>
    <tr>
        <td><b>DIRECCIÓN:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['direccion_pto_intercambio'] ?></td>
    </tr>
    <tr>
        <td><b>CIUDAD:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['nombre_ciudad'] ?></td>
    </tr>
    <tr>
        <td></td>
        <td><b>DATOS CONTACTO</b></td>
    </tr>
    <tr>
        <td><b>EMAIL:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['email'] ?></td>
    </tr>
    <tr>
        <td><b>TELEFONO:</b></td>
        <td><?php echo $listadoAdminPtosIntermcabio['telefono_usuario'] ?></td>
    </tr>
    <tr>
        <td></td>
        <td><b>Otros datos</b></td>
    </tr>
    <tr>
        <td>Fecha Nacimiento:</td>
        <td><?php echo $listadoAdminPtosIntermcabio['fecha_nacimiento_usuario'] ?></td>
    </tr>
    <tr>
        <td>Fecha Ingreso:</td>
        <td><?php echo $listadoAdminPtosIntermcabio['fecha_ingreso_usuario'] ?></td>
    </tr>



</table>