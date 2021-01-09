<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $ciudades = $ciudadPDO->obtieneCiudades();

    //Agrego el archivo PuntoIntercambioPDO y rellenar el ComboBox 
    require('../../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $puntosIntercambio = $puntoIntercambioPDO->obtienePuntosIntercambio();


?>

<table class="table table-borderless table-responsive">
    <tr>
        <td>Rut Usuario:</td>
        <td><input class="form-control" type="text" id="rut_usuario_agrega"  required oninput="checkRut(this)" placeholder="Rut Usuario"></td>
    </tr>
    <tr>
        <td>Nombres:</td>
        <td><input class="form-control" type="text"  id="nombres_usuario" required placeholder="Nombres"</td>
    </tr>
    <tr>
        <td>Apellido Paterno:</td>
        <td><input class="form-control" type="text"  id="ap_paterno_usuario" required placeholder="Apellido Paterno"></td>
    </tr>
    <tr>
        <td>Apellido Materno:</td>
        <td><input class="form-control" type="text"  id="ap_paterno_materno" required placeholder="Apellido Materno"></td>
    </tr>
    <tr>
        <td>Fecha Nacimiento:</td>
        <td><input class="form-control" type="date"  id="fecha_nacimiento_usuario" required ></td>
    </tr> 
    <tr>
        <td>email:</td>
        <td><input class="form-control" type="text"  id="email" required placeholder="email@dominio.com"></td>
    </tr>   
    <tr>
        <td>Contraseña:</td>
        <td><input class="form-control" type="password"  id="clave_usuario" required placeholder="Contraseña"></td>
    </tr>  
    <tr>
        <td>Telefono:</td>
        <td><input class="form-control" type="text"  id="telefono_usuario" required placeholder="Telefono"></td>
    </tr>
    <tr>
    <td>Ciudad:</td>
    <td>
        <select class="form-control" id="id_ciudadTU"  required>
            <option value="">Ciudades...</option>

                <?php           
                    foreach($ciudades as $row){ ?>

                        <option value="<?php echo $row['id_ciudad'];?>"><?php echo $row['nombre_ciudad'];?></option>    

                <?php  } ?>      
                            
        </select>
    </td>
    <hr>
    </tr>
        <td>Asignar Pto Intercambio:</td>
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
        <td><button onclick="agregarAdminPtoIntercambio()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Administrador Punto Intercambio</button></td>
        
    </tr>
</table>                      