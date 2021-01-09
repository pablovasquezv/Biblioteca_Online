<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/EditorialPDO.php');

    $editorialPDO = new EditorialPDO();

    $listadoEditoriales = $editorialPDO->obtieneEditoriales();

?> 


<html>
<head>
    

</head>
<body>

    <h3>Agrega Editoriales</h3>
    <form action="../../../controlador/ControladorAdminSistema/ControladorEditorialAdminSistema/EditorialAgregaControlador.php" method="post">
        <div class="form-group">
            <table>
                <tr>
                    <td>Nombre Editorial:</td>
                    <td><input type="text" name="nombre_editorial" id="nombreEditorial" class="form-control" placeholder="Nombre Editorial" required></td>
                </tr>               
                <tr>
                    <td><!-- <button onclick="agregarEditorial()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Editorial</button> --></td>
                    <td><button type="submit" name="" class="btn btn-success btn-sm">Agregar Editorial</button></td>
                </tr>
            </table>
        </div>
    </form>    
</body>
</html>