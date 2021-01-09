<?php

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

    session_start();
    $rut_usuario = $_SESSION['rut_usuario'];

?>


<html>
<head>
    

</head>
<body>

    <h3>Agregar libro a biblioteca personal</h3>

    <form action="../../../controlador/ControladorAdminSistema/ControladorLibroAdminSistema/LibroModificaControlador.php" method="post">

    <table>
        <tr>
            <td>Titulo Libro:</td>
            <td><input  class="form-control" type="text" name="titulo_libro" id="titulolibro" value="" required></td>
        </tr>
        <tr>
            <td>Fecha Lanzamiento:</td>
            <td><input  class="form-control" type="date" name="fecha_lanzamiento_libro" id="fechaLanzamientoLibro" value="" required></td>
        </tr>
        <tr>
            <td>Páginas Libro</td>
            <td><input  class="form-control" type="text" name="num_paginas_libro" id="numPaginasLibro" value="" required></td>
        </tr>
        <tr>
            <td>Descripcion Libro </td>
            <td><input  class="form-control" type="text" name="descripcion_libro" id="descripcionLibro" value="" required></td>
        </tr>
        <hr>
        <tr>
            <td colspan="2" class="table-active">Si el autor, genero o editorial no están en los listados, puede agregarlos manualmente en los botones correspondientes.</td>
        </tr>

        <!-- COMBO BOX 1: Autores -->
        <tr>
            <td>Autor:</td>
            <td>
            <select  class="form-control" id="idAutorTL" name="id_autorTL" required>
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
                <select  class="form-control" id="idGeneroTL" name="id_generoTL" required>
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
                <select  class="form-control" id="idEditorialTL" name="id_editorialTL" required>
                    <option value="">Editoriales...</option>

                        <?php           
                            foreach($listadoEditoriales as $row){ ?>

                                <option value="<?php echo $row['id_editorial'];?>"><?php echo $row['nombre_editorial'];?></option>    

                        <?php  } ?>      
                            
                </select>
            </td>
        </tr>
        <tr>   
            <td><input type="hidden" name="hiddenRut_usuarioTL" id="rutUsuarioTL" value="<?php echo $rut_usuario ?>" ></td>
        </tr>



        <tr>
             <!--<td><button onclick="modificaLibro(<?php echo $listadoLibros['id_libro']; ?>)" data-dismiss="modal" class="btn btn-success btn-sm">Modificar Libro</button></td> --> 
            <td></td>
            <td><button  type="submit" name="btn_agrega_libro_usuario_normal" class="btn btn-success btn-sm">Agregar Libro</button></td>
        </tr>
    </table>

    </form>

</body>
</html>