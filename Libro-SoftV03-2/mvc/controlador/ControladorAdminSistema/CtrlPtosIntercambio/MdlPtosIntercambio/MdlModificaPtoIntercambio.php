<?php

    //Agrego el archivo CiudadPDO para acceder a sus funciones para llenar el ComboBox
    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO(); 

    $listadoCiudades = $ciudadPDO->obtieneCiudades();

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/PuntoIntercambioPDO.php');

    $puntoIntercambioPDO = new PuntoIntercambioPDO();

    $id_pto_intercambio = $_GET['id_pto_intercambio'];

    $listadoPuntosIntercambio = $puntoIntercambioPDO->obtienePuntoIntercambioPorId($id_pto_intercambio);
?> 



<html>
<head>
    

</head>
<body>

    <h3>Agrega Punto de Intercambio</h3>

    
        <div class="form-group">
            <table>
                <tr>
                    <td> <b>ID Punto Intermcabio:</b> </td>
                    <td><input type="text" value="<?php echo $listadoPuntosIntercambio['id_pto_intercambio'] ?>"  id="id_pto_intermcabio" class="form-control" disabled></td>
                </tr>
                <tr>
                    <td> <b>Nombre Punto Intermcabio:</b> </td>
                    <td><input type="text" value="<?php echo $listadoPuntosIntercambio['nombre_pto_intercambio'] ?>"  id="nombre_pto_intercambio" class="form-control" placeholder="Nombre Pto Intercambio" ></td>
                </tr>
                <tr>
                    <td> <b>Direccion Pto Intercambio:</b> </td>
                    <td><input type="text" value="<?php echo $listadoPuntosIntercambio['direccion_pto_intercambio'] ?>" id="direccion_pto_intercambio" class="form-control" placeholder="Dirección Pto Intercambio" ></td>
                </tr>
                <tr>
                    <td> <b>Seleccione Ciudad</b> </td>
                    <td>
                        <select id="id_ciudadTPI" class="form-control">
                            <option value="">Seleccione Ciudad...</option>

                        <?php           
                            foreach($listadoCiudades as $row){ ?>

                                <option value="<?php echo $row['id_ciudad'];?>"><?php echo $row['nombre_ciudad'];?></option>    
                            
                        <?php  } ?>      
                            
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button onclick="modificarPtoIntercambio(<?php echo $listadoPuntosIntercambio['id_pto_intercambio'] ?>)" data-dismiss="modal" class="btn btn-success btn-sm">Modificar Punto Intercambio</button></td>
                    <td></td>
                </tr>
            </table>
        </div>
    
</body>
</html>