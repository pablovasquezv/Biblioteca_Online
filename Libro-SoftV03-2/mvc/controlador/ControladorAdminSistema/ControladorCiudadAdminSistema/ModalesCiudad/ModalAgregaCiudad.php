<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $listadoRegiones = $regionPDO->obtieneRegiones();

?> 


<html>
<head>
    

</head>
<body>

    <h3>Agrega Ciudad</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorCiudadAdminSistema/CiudadAgregaControlador.php" method="post">
        <div class="form-group">
        <table>
            <tr>
                <td>Nombre Ciudad:</td>
                <td><input type="text" name="nombre_ciudad" id="nombreCiudad" class="form-control" placeholder="Nombre Ciudad" required></td>
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
            <td><!-- <button onclick="agregarCiudad()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Ciudad</button>--></td>
            <td><button type="submit" value="" class="btn btn-success btn-sm">Agregar Ciudad</button></td>
        </tr>     
        </table>
        </div>
    </form>
</body>
</html>