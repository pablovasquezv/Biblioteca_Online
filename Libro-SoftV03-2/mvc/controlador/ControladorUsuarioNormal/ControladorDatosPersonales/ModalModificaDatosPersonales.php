<?php 

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../modelo/UsuariosPDO.php");

    $usuariosPDO = new UsuariosPDO();

    session_start();
    $rut_usuario = $_SESSION['rut_usuario'];

    $datosPersonales = $usuariosPDO->obtieneUsuarioPorRut($rut_usuario); 


?>

<table>
    <tr>
    <td>Rut:</td>
        <td><label for=""></label><?php echo $datosPersonales['rut_usuario'] ?></td>
        <td></td>
    </tr>
    <tr>
        <td>Nombre: </td>
        <td><input class="form-control" id="nombres_usuario" type="text" value="<?php echo $datosPersonales['nombres_usuario']?>" required></td>
    </tr>
    <tr>
        <td>apellido Paterno:</td>
        <td><input class="form-control"  id="ap_paterno_usuario" type="text" value="<?php echo $datosPersonales['ap_paterno_usuario']?>" required></td>
    </tr>
    <tr>
        <td>Apellido Materno:</td>
        <td><input class="form-control"  id="ap_paterno_materno" type="text" value="<?php echo $datosPersonales['ap_paterno_materno']?>" required></td>
    </tr>
    <tr>
        <td>Fecha de Nacimiento:</td>
        <td><input class="form-control" id="fecha_nacimiento_usuario" type="date" value="<?php echo $datosPersonales['fecha_nacimiento_usuario']?>" required></td>
    </tr>
    <tr>
        <td>Email:</td>
        <td><input class="form-control"  id="email" type="text" value="<?php echo $datosPersonales['email']?>" required></td>
    </tr>
    <tr>
        <td>Telefono:</td>
        <td><input class="form-control" id="telefono_usuario" type="text" value="<?php echo $datosPersonales['telefono_usuario']?>" required></td>
    </tr>  
    <tr>
        <td></td>
        <td><button onclick="modificarDatosPersonales('<?php echo $datosPersonales['rut_usuario'] ?>')"  class="btn btn-success btn-sm">Modificar Datos Personales</button></td>
    <tr> 
</table>