<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $ciudades = $ciudadPDO->obtieneCiudades();


?>

<table class="table table-borderless">
                        <tr>
                            <td>Rut Usuario:</td>
                            <td><input class="form-control" type="text" name="rut" id="rut" required oninput="checkRut(this)" placeholder="Rut Usuario"></td>
                        </tr>
                        <tr>
                            <td>Nombres:</td>
                            <td><input class="form-control" type="text" name="txt_nombres_Usuario" id="" required placeholder="Nombres"</td>
                        </tr>
                        <tr>
                            <td>Apellido Paterno:</td>
                            <td><input class="form-control" type="text" name="txt_ap_Paterno" id="" required placeholder="Apellido Paterno"></td>
                        </tr>
                        <tr>
                            <td>Apellido Materno:</td>
                            <td><input class="form-control" type="text" name="txt_ap_Materno" id="" required placeholder="Apellido Materno"></td>
                        </tr>
                        <tr>
                            <td>Fecha Nacimiento:</td>
                            <td><input class="form-control" type="date" name="dte_nacimiento_Usuario" id="" required ></td>
                        </tr> 
                        <tr>
                            <td>email:</td>
                            <td><input class="form-control" type="text" name="txt_email_Usuario" id="" required placeholder="email@dominio.com"></td>
                        </tr>   
                        <tr>
                            <td>Contraseña:</td>
                            <td><input class="form-control" type="password" name="txt_password_Usuario" id="" required placeholder="Contraseña"></td>
                        </tr>  
                        <tr>
                            <td>Telefono:</td>
                            <td><input class="form-control" type="text" name="txt_telefono_Usuario" id="" required placeholder="Telefono"></td>
                        </tr>
                        <!-- <tr>
                            <td>Fecha Ingreso:</td>
                            <td><input type="date" name="dte_fechaIngreso_Usuario" id="" required></td>
                        </tr>-->
                        <tr>
                            <td>Ciudad:</td>
                            <td>
                            <select class="form-control" id="id_ciudad" name="cbx_ciudad" required>
                                <option value="">Ciudades...</option>

                                    <?php           
                                        foreach($ciudades as $row){ ?>

                                            <option value="<?php echo $row['id_ciudad'];?>"><?php echo $row['nombre_ciudad'];?></option>    

                                    <?php  } ?>      
                            
                            </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td><!--<input type="reset" value="Limpiar Campos" class="btn btn-warning">--></td>
                            <td><input type="submit" value="Registrar!" name="btn_RegistraUsuarioNormal" class="btn btn-success"></td>
                            <td></td>
                        </tr>
</table>                      