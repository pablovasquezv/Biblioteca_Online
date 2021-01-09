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
    <td>Contraseña Actual:</td>
        <td><label for=""></label><?php echo $datosPersonales['clave_usuario'] ?></td>
        <td></td>
    </tr>
    <tr>
        <td>Clave Nueva </td>
        <td><input class="form-control" id="clave_usuario" type="password" value="" required></td>
    </tr>
    <tr>
        <td>Repetir Clave Nueva</td>
        <td><input class="form-control"  id="clave_usuario_repetida" type="password" value="" required></td>
    </tr>
   
    <tr>
        <td></td>
        <td><button onclick="cambiarClave('<?php echo $datosPersonales['rut_usuario'] ?>')"  class="btn btn-success btn-sm">Cambiar Contraseña</button></td>
    <tr> 
</table>