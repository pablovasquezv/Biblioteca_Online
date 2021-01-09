<?php

    //Agrego el archivo RegionPDO para acceder a sus funciones 
    require_once("../../../../modelo/LibroPDO.php");

    $id_libro = $_GET['id_libro'];
    //$id_libro = 1;

    $libroPDO = new LibroPDO();

    $listadoLibros = $libroPDO->obtieneLibroPorId($id_libro);

    //DATOS DEL AUTOR PARA CREAR EL COMBO BOX!!
    require('../../../../modelo/AutorPDO.php');

    $autorPDO = new AutorPDO();

    $listadoAutores = $autorPDO->obtieneAutores();

    //DATOS DEL GENERO PARA CREAR EL COMBO BOX!!
    require('../../../../modelo/GeneroPDO.php');

    $generoPDO = new GeneroPDO();

    $listadoGeneros = $generoPDO->obtieneGeneros();

    //DATOS DEL EDITORIAL PARA CREAR EL COMBO BOX!!
    require('../../../../modelo/EditorialPDO.php');

    $editorialPDO = new EditorialPDO();

    $listadoEditoriales = $editorialPDO->obtieneEditoriales();

?>


<html>
<head>
    

</head>
<body>

    <h3>Modificar Datos Libro</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroModificaControlador.php" method="post">
    <div class="form-group">
    <table>
        <tr>
            <td>*El id no puede ser modificado</td>
            <td><input type="text" name="id_libro" id="id_libro" value="<?php echo $listadoLibros['id_libro'] ?>" class="form-control" disabled></td>
            <td><input type="hidden" name="hiddenId_libro" id="id_libro" value="<?php echo $listadoLibros['id_libro'] ?>"></td>
            <td></td>
        </tr>
        <tr>
            <td>Titulo Libro:</td>
            <td><input type="text" name="titulo_libro" id="titulolibro" value="<?php echo $listadoLibros['titulo_libro'] ?>" class="form-control" required></td>
        </tr>
        <tr>
            <td>Fecha Lanzamiento:</td>
            <td><input type="date" name="fecha_lanzamiento_libro" id="fechaLanzamientoLibro" value="<?php echo $listadoLibros['fecha_lanzamiento_libro'] ?>" class="form-control" required></td>
        </tr>
        <tr>
            <td>Páginas Libro</td>
            <td><input type="text" name="num_paginas_libro" id="numPaginasLibro" value="<?php echo $listadoLibros['num_paginas_libro'] ?>" class="form-control" required></td>
        </tr>
        <tr>
            <td>Descripcion Libro </td>
            <td><input type="text" name="descripcion_libro" id="descripcionLibro" value="<?php echo $listadoLibros['descripcion_libro'] ?>" class="form-control" required></td>
        </tr>

        <!-- COMBO BOX 1: Autores -->
        <tr>
            <td>Autor:</td>
            <td>
            <select id="idAutorTL" name="id_autorTL" class="form-control" required>
                <option value="">Autores...</option>

                    <?php           
                        foreach($listadoAutores as $row){ ?>

                            <option value="<?php echo $row['id_autor'];?>"><?php echo $row['nombre_autor'];?> <?php echo $row['apellido_autor'];?></option>    

                    <?php  } ?>      

            </select>
            </td>
        </tr>

        <!-- COMBO BOX 2: Autores -->
        <tr>
            <td>Genero:</td>
            <td>
                <select id="idGeneroTL" name="id_generoTL" class="form-control" required>
                    <option value="">Generos...</option>

                        <?php           
                            foreach($listadoGeneros as $row){ ?>

                                <option value="<?php echo $row['id_genero'];?>"><?php echo $row['nombre_genero'];?></option>    

                        <?php  } ?>      
                            
                </select>
            </td>
        </tr>

        <!-- COMBO BOX 3: Editorial -->
        <tr>
            <td>Editorial:</td>
            <td>
                <select id="idEditorialTL" name="id_editorialTL" class="form-control" required>
                    <option value="">Editoriales...</option>

                        <?php           
                            foreach($listadoEditoriales as $row){ ?>

                                <option value="<?php echo $row['id_editorial'];?>"><?php echo $row['nombre_editorial'];?></option>    

                        <?php  } ?>      
                            
                </select>
            </td>
        </tr>
        <tr>
            <td>*El Propietario no puede ser modificado:</td>
            <td><input type="text" name="rut_usuarioTL" id="rutUsuarioTL" value="<?php echo $listadoLibros['rut_usuarioTL'] ?>" class="form-control" disabled></td>
            <td><input type="hidden" name="hiddenRut_usuarioTL" id="rutUsuarioTL" value="<?php echo $listadoLibros['rut_usuarioTL'] ?>" ></td>
        </tr>



        <tr>
             <!--<td><button onclick="modificaLibro(<?php echo $listadoLibros['id_libro']; ?>)" data-dismiss="modal" class="btn btn-success btn-sm">Modificar Libro</button></td> --> 
            <td></td>
            <td><button type="submit" name="btn_update_libro" class="btn btn-success btn-sm">Modificar Libro</button></td>
            <td></td>
        </tr>
    </table>

    </form>
    </div>
</body>
</html>