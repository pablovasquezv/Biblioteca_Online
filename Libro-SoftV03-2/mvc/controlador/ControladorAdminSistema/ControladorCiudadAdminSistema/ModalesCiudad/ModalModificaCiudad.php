<?php

    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $id_ciudad = $_GET['id_ciudad'];
    
    $ciudad = $ciudadPDO->obtieneCiudadPorId($id_ciudad );

    //Para cargar el combo box de nuevo
    require('../../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $listadoRegiones = $regionPDO->obtieneRegiones();


?>

<html>
<head>
    
    

</head>
<body>

    <h3>Modificar Datos Ciudad</h3>
    <form action="../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/CiudadModificaControlador.php" method="post">
        <div class="form-group"> 
            <table>        
                <tr>
                    <td>* Id no puede ser modificado:</td>
                    <td><input type="text" name="" id="idCiudad" value="<?php echo $ciudad['id_ciudad'] ?>" class="form-control" disabled></td>
                    <td><input type="hidden" name="id_ciudad" value="<?php echo $ciudad['id_ciudad'] ?>"></td>
                </tr>
                <tr>
                    <td>Nombre Ciudad:</td>
                    <td><input type="text" name="nombre_ciudad" id="nombreCiudad" value="<?php echo $ciudad['nombre_ciudad'] ?>" placeholder="Nombre Ciudad" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Seleccione Región</td>
                    <td>
                        <select name="id_regionTC" id="idRegionTC" class="form-control" required>
                            <option value="">Seleccione Región...</option>

                            <?php           
                                foreach($listadoRegiones as $row){ ?>

                                    <option value="<?php echo $row['id_region'];?>"><?php echo $row['nombre_region'];?></option>    

                            <?php  } ?>      

                        </select>
                    </td>
                </tr>
                <tr> 
                    <td><!-- <button onclick="modificaCiudad(<?php echo $ciudad['id_ciudad'] ?>)" data-dismiss="modal" class="btn btn-success btn-sm">Modifica Ciudad</button> --></td>                           
                    <td><button type="submit" value="" class="btn btn-success btn-sm">Modifica Ciudad Ciudad</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>