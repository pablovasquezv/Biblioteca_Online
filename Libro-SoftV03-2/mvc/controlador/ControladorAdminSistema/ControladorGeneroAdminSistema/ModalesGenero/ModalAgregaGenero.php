<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require('../../../../modelo/GeneroPDO.php');

    $generoPDO = new GeneroPDO();

    $listadoGeneros = $generoPDO->obtieneGeneros();

?> 


<html>
<head>
    

</head>
<body>

    <h3>Agrega Generos</h3>
        <form action="../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/GeneroAgregaControlador.php" method="post">
            <div>
                <table>
                    <tr>
                        <td>Nombre Genero:</td>
                        <td><input type="text" name="nombre_genero" id="nombreGenero" class="form-control" placeholder="Nombre Genero" required></td>
                    </tr>            
                    <tr>
                        <td><!-- <button onclick="agregarGenero()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Genero</button> --></td>
                        <td><button type="submit" name="" class="btn btn-success btn-sm">Agregar Genero</button></td>
                    </tr>
                </table>
            </div> 
        </form>
</body>
</html>