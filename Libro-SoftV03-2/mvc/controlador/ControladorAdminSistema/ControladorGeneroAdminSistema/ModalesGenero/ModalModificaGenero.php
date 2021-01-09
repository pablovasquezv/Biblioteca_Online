<?php

    require_once("../../../../modelo/GeneroPDO.php");

    $generoPDO = new GeneroPDO();

    $id_genero = $_GET['id_genero'];
    

    $genero = $generoPDO->obtieneGeneroPorId($id_genero);


?>


<html>
<head>
    

</head>
<body>

    <h3>Modificar Datos Genero</h3>
        <form action="../../../controlador/ControladorAdminSistema/ControladorGeneroAdminSistema/GeneroModificaControlador.php" method="post">
            <div>
                <table>
                    <tr>
                        <td>*El id no puede ser modificado:</td>
                        <td><input type="text" name="" id="id_genero" value="<?php echo $genero['id_genero'] ?>" class="form-control" disabled></td>
                        <td><input type="hidden" name="id_genero" value="<?php echo $genero['id_genero'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Nombre Genero:</td>
                        <td><input type="text" name="nombre_genero" id="nombre_genero" value="<?php echo $genero['nombre_genero'] ?>" class="form-control" placeholder="Nombre Genero" required></td>
                    </tr>
                    <tr>
                        <td><!-- --x<button onclick="modificaGenero(<?php echo $genero['id_genero'] ?>)" data-dismiss="modal" class="btn btn-success btn-sm"  >Modificar Genero</button>--></td>
                        <td><button type="submit" name="" class="btn btn-success btn-sm">Modificar Genero</button></td>
                    </tr>
                </table>
            </div>
        </form>
</body>
</html>