<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/EditorialPDO.php');

    $editorialPDO = new EditorialPDO();

    $id_editorial = $_GET['id_editorial'];

    $editorial = $editorialPDO->obtieneEditorialPorId($id_editorial);


?>


<html>
<head>
    

</head>
<body>

    <h3>Modificar Datos Editorial</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialModificaControlador.php" method="post">
        <div class="form-group">
            <table>
                <tr>
                    <td>ID no puede ser modificado:</td>
                    <td><input class="form-control" type="text" value="<?php echo $editorial['id_editorial'] ?>" disabled></td>
                    <td><input type="hidden" name="id_editorial" value="<?php echo $editorial['id_editorial'] ?>"></td>
                </tr>
                <tr>
                    <td>Nombre Editorial:</td>
                    <td><input type="text" name="nombre_editorial" id="nombreEditorial" value="<?php echo $editorial['nombre_editorial'] ?>" class="form-control" placeholder="Nombre Editorial"  required></td>
                </tr>               
                <tr>
                    <td><!-- <button onclick="agregarEditorial()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Editorial</button> --></td>
                    <td><button type="submit" name="" class="btn btn-success btn-sm">Modifica Editorial</button></td>
                </tr>
            </table>
        </div>
    </form>    
</body>
</html>