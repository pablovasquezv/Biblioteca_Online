<?php

    require('../../../../modelo/RegionPDO.php');

    $regionPDO = new RegionPDO();

    $id_region = $_GET['id_region'];
    

    $region = $regionPDO->obtieneRegionPorId($id_region);


?>


<html>
<head>
    

</head>
<body>

    <h3>Modificar Datos Región</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/RegionModificaControlador.php" method="post">
        <div class="form-group">    
            <table>
                <tr>
                    <td>Número Región:</td>
                    <td><input type="text" name="" id="id_region" value="<?php echo $region['id_region'] ?>" class="form-control" disabled></td>
                    <td>* El id no puede ser modificado</td>
                    <td><input type="hidden" name="id_region" value="<?php echo $region['id_region'] ?>"></td>
                </tr>
                <tr>
                    <td>Nombre Región:</td>
                    <td><input type="text" name="nombre_region" id="nombre_region" value="<?php echo $region['nombre_region'] ?>" class="form-control" placeholder="Nombre Región" required></td>
                </tr>
                <tr>
                    <td><!-- <button onclick="modificaRegion(<?php echo $region['id_region'] ?>)" data-dismiss="modal" class="btn btn-success btn-sm"  >Modificar</button>--></td>
                    <td><button type="submit" name=""  class="btn btn-success btn-sm">Modificar</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>