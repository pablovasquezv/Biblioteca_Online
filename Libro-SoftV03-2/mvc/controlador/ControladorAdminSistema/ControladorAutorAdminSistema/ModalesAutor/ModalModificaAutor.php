<?php

    require_once("../../../../modelo/AutorPDO.php");

    $autorPDO = new AutorPDO();

    $id_autor = $_GET['id_autor'];    

    $autor = $autorPDO->obtieneAutorPorId($id_autor);


?>


<html>
<head>
    

</head>
<body>

    <h3>Modificar Datos Autor</h3>
    <form action="../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/AutorModificaControlador.php" method="post">
        <div class="form-group">
            <table>
                <tr>
                    <td>*ID No puede ser modificado:</td>
                    <td><input class="form-control" type="text" name="" id="id_autor" value="<?php echo $autor['id_autor'] ?>"  disabled></td>
                    <td><input type="hidden" name="id_autor" value="<?php echo $autor['id_autor'] ?>"></td>
                </tr>
                <tr>
                    <td>Nombre Autor:</td>
                    <td><input class="form-control" type="text" name="nombre_autor" id="nombreAutor" value="<?php echo $autor['nombre_autor'] ?>"placeholder="Nombre Autor"  required></td>
                </tr>
                <tr>
                    <td>Apellido Autor:</td>
                    <td><input class="form-control" type="text" name="apellido_autor" id="apellidoAutor" value="<?php echo $autor['apellido_autor'] ?>" placeholder="Apellido Autor" required></td>
                </tr>
                <tr>
                    <td>Fecha Nacimiento Autor:</td>
                    <td><input class="form-control" type="date" name="fecha_nacimiento_autor" id="fechaNacimientoAutor" value="<?php echo $autor['fecha_nacimiento_autor'] ?>" required></td>
                </tr>
                <tr>
                    <td>Nacionalidad Autor:</td>
                    <td><input class="form-control" type="text" name="nacionalidad" id="nacionalidadAutor" value="<?php echo $autor['nacionalidad'] ?>" placeholder="Nacionalidad Autor" required></td>
                </tr>
                <tr>
                    <td><!-- <button onclick="modificaAutor(<?php echo $autor['id_autor'] ?>)" data-dismiss="modal" class="btn btn-success btn-sm"  >Modificar Autor</button> --></td>
                    <td><button type="submit" name="" class="btn btn-success btn-sm">Modifica Autor</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>