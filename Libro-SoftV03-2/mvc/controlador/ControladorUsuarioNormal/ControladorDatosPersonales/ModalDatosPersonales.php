<?php 

//Agrego el archivo RegionPDO para acceder a sus funciones 
require_once("../../../modelo/UsuariosPDO.php");

$usuariosPDO = new UsuariosPDO();

session_start();
$rut_usuario = $_SESSION['rut_usuario'];

$datosPersonales = $usuariosPDO->obtieneDatosPersonalesUsuarioPorRut($rut_usuario);

?>


  <h4>DATOS PERSONALES</h4>
<table class="table table-striped table-sm table-responsive">
    <tr>
        <td> <b>Rut Usuario:</b>  </td>
        <td><label for=""></label><?php echo $datosPersonales['rut_usuario'] ?></td>
    </tr>
    <tr>
        <td> <b>Nombre:</b>  </td>
        <td><label><?php echo $datosPersonales['nombres_usuario'] . " " . $datosPersonales['ap_paterno_usuario'] . " " . $datosPersonales['ap_paterno_materno'] ?></td>
    </tr>
    <tr>
        <td> <b>Fecha Nacimiento:</b>  </td>
        <td><label><?php echo $datosPersonales['fecha_nacimiento_usuario'] ?></td>
    </tr>
    <tr>
        <td> <b>Email:</b>  </td>
        <td><label><?php echo $datosPersonales['email'] ?></td>
    </tr>
    <tr>
        <td> <b>Telefono:</b>  </td>
        <td><label><?php echo $datosPersonales['telefono_usuario'] ?></td>
    </tr>
    <tr>
        <td> <b>Fecha Ingreso:</b>  </td>
        <td><label><?php echo $datosPersonales['fecha_ingreso_usuario'] ?></td>
    </tr>
    <tr>
        <td> <b>Tipo Usuario:</b>  </td>
        <td><label><?php echo $datosPersonales['nombre_tipo_usuario'] ?></td>
    </tr>
    <tr>
        <td> <b>Ciudad:</b>  </td>
        <td><label><?php echo $datosPersonales['nombre_ciudad'] ?></td>
    </tr>


    <tr>
      <td></td>
      <td><Button onclick="cargaModalModificaDatosPersonales()" type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalModificaDatosPersonales">Modificar Datos</Button>
      <Button onclick="cargaModalModificaClave()" type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#ModalModificaClave">Cambiar Contraseña</Button></td>
    </tr>

</table>