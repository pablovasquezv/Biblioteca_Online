<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $ciudades = $ciudadPDO->obtieneCiudades();


    //Agregamos el archivo con las funciones
    require_once("../../../../modelo/UsuariosPDO.php");

    $usuariosPDO = new UsuariosPDO();

    $rut_usuario = $_GET['rut_usuario'];

    $datosAdminPtoIntercambio = $usuariosPDO->obtieneUsuarioPorRut($rut_usuario);


?>

<table class="table table-borderless table-responsive">
    <tr>
        <td>Rut Usuario:</td>
        <td><input class="form-control" type="text" id="rut_usuario"   oninput="checkRut(this)" value="<?php echo $datosAdminPtoIntercambio['rut_usuario'] ?>" disabled>
            <input type="hidden" id="rut_usuario" value="<?php echo $datosAdminPtoIntercambio['rut_usuario']; ?>">
        </td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><input class="form-control" type="text"  id="nombres_usuario" value="<?php echo $datosAdminPtoIntercambio['nombres_usuario'] ?>" placeholder="Nombres"</td>
    </tr>
    <tr>
        <td>Apellido Paterno:</td>
        <td><input class="form-control" type="text"  id="ap_paterno_usuario" value="<?php echo $datosAdminPtoIntercambio['ap_paterno_usuario'] ?>" placeholder="Apellido Paterno"></td>
    </tr>
    <tr>
        <td>Apellido Materno:</td>
        <td><input class="form-control" type="text"  id="ap_paterno_materno" value="<?php echo $datosAdminPtoIntercambio['ap_paterno_materno'] ?>" placeholder="Apellido Materno"></td>
    </tr>
    <tr>
        <td>Fecha Nacimiento:</td>
        <td><input class="form-control" type="date"  id="fecha_nacimiento_usuario" value="<?php echo $datosAdminPtoIntercambio['fecha_nacimiento_usuario'] ?>" ></td>
    </tr> 
    <tr>
        <td>email:</td>
        <td><input class="form-control" type="text"  id="email" value="<?php echo $datosAdminPtoIntercambio['email'] ?>" placeholder="email@dominio.com"></td>
    </tr>   
    <tr>
        <td>Contraseña:</td>
        <td><input class="form-control" type="password"  id="clave_usuario" value="<?php echo $datosAdminPtoIntercambio['clave_usuario'] ?>" placeholder="Contraseña"></td>
    </tr>  
    <tr>
        <td>Telefono:</td>
        <td><input class="form-control" type="text"  id="telefono_usuario" value="<?php echo $datosAdminPtoIntercambio['telefono_usuario'] ?>" placeholder="Telefono"></td>
    </tr>
    <tr>
    <td>Ciudad:</td>
    <td>
        <select class="form-control" id="id_ciudadTU"  >
            <option value="">Ciudades...</option>

                <?php           
                    foreach($ciudades as $row){ ?>

                        <option value="<?php echo $row['id_ciudad'];?>"><?php echo $row['nombre_ciudad'];?></option>    

                <?php  } ?>      
                            
        </select>
    </td>
     </tr>
                        
    <tr>
        <td></td>
        <td><button onclick="modificaAdminPtoIntercambio()" data-dismiss="modal" class="btn btn-success btn-sm">Modifica Administrador Punto Intercambio</button></td>
        
    </tr>
</table>   