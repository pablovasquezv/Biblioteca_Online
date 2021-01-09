<html>
<head>
    

</head>
<body>

    <h3>Agrega Autor</h3>
    <form action="../../../controlador/ControladorAdminSistema/ControladorAutorAdminSistema/AutorAgregaControlador.php" method="post">
        <div class="form-group">
            <table>                            
                <tr>
                    <td>Nombre Autor:</td>
                    <td><input type="text" name="nombre_autor" id="nombreAutor" class="form-control" placeholder="Nombre Autor" required></td>
                </tr>
                <tr>
                    <td>Apellido Autor:</td>
                    <td><input type="text" name="apellido_autor" id="apellidoAutor" class="form-control" placeholder="Apellido Autor" required></td>
                </tr>
                <tr>
                    <td>Fecha Nacimiento Autor:</td>
                    <td><input type="date" name="fecha_nacimiento_autor" id="fechaNacimientoAutor" class="form-control" required></td>
                </tr>
                <tr>
                    <td>Nacionalidad Autor:</td>
                    <td><input type="text" name="nacionalidad" id="nacionalidadAutor" class="form-control" placeholder="Nacionalidad Autor" required></td>
                </tr>
                <tr>
                    <td><!-- <button onclick="agregarAutor()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Autor</button> --></td>
                    <td><button type="submit" name="" class="btn btn-success btn-sm">Agregar Autor</button></td>
                </tr>
            </table>
        </div>
    </form>    
</body>
</html>