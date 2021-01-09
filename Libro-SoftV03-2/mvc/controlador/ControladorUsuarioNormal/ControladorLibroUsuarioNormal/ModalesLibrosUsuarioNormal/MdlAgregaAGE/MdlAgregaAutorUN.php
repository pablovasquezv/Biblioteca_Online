<html>
<head>
    

</head>
<body>

    <h3>Agrega Autor</h3>

        <div class="form-group">
            <table>                            
                <tr>
                    <td>Nombre Autor:</td>
                    <td><input type="text" name="nombre_autor" id="nombreAutor" class="form-control" placeholder="Nombre Autor" ></td>
                </tr>
                <tr>
                    <td>Apellido Autor:</td>
                    <td><input type="text" name="apellido_autor" id="apellidoAutor" class="form-control" placeholder="Apellido Autor" ></td>
                </tr>
                <tr>
                    <td>Fecha Nacimiento Autor:</td>
                    <td><input type="date" name="fecha_nacimiento_autor" id="fechaNacimientoAutor" class="form-control" ></td>
                </tr>
                <tr>
                    <td>Nacionalidad Autor:</td>
                    <td><input type="text" name="nacionalidad" id="nacionalidadAutor" class="form-control" placeholder="Nacionalidad Autor" ></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button onclick="agregarAutor()" data-dismiss="modal" class="btn btn-success btn-sm">Agregar Autor</button></td>
                </tr>
            </table>
        </div>

</body>
</html>