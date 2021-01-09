<?php

    //Agrego el archivo CiudadPDO para acceder a sus funciones 
    require('../../../../modelo/CiudadPDO.php');

    $ciudadPDO = new CiudadPDO();

    $listadoCiudades = $ciudadPDO->obtieneCiudades();

?> 



<html>
<head>
    

</head>
<body>

    <h3>Agrega Punto de Intercambio</h3>

    
        <div class="form-group">
            <table>
                <tr>
                    <td> <b>Nombre Punto Intermcabio:</b> </td>
                    <td><input type="text"  id="nombre_pto_intercambio" class="form-control" placeholder="Nombre Pto Intercambio" ></td>
                </tr>
                <tr>
                    <td> <b>Direccion Pto Intercambio:</b> </td>
                    <td><input type="text"  id="direccion_pto_intercambio" class="form-control" placeholder="Dirección Pto Intercambio" ></td>
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
                    <td><button onclick="agregarPtoIntercambio()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Punto Intercambio</button></td>
                    <td></td>
                </tr>
            </table>
        </div>
    
</body>
</html>