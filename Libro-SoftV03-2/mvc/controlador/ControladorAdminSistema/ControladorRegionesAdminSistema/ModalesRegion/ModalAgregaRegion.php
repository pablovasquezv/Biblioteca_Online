<html>
<head>
    

</head>
<body>

    <h3>Agrega Región</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorRegionesAdminSistema/RegionAgregaControlador.php" method="post">
        <div class="form-group">
            <table>
                <tr>
                    <td>Número Región:</td>
                    <td><input type="text" name="id_region" id="idRegion" class="form-control" placeholder="Número Región" required></td>
                </tr>
                <tr>
                    <td>Nombre Región:</td>
                    <td><input type="text" name="nombre_region" id="nombreRegion" class="form-control" placeholder="Nombre Región" required></td>
                </tr>
                <tr>
                    <td><!-- <button type="submit" onclick="agregarRegion()"  class="btn btn-success btn-sm">Agregar Region</button>--></td>
                    <td><button type="submit" name="" class="btn btn-success btn-sm">Agregar Region</button></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>