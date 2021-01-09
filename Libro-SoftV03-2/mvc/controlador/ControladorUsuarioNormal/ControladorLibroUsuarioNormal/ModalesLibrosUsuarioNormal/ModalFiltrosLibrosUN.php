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

?>



    <table class="table-responsive">        
        <!-- COMBO BOX 1: Autores -->
        <tr>
            <td>Autor:</td>
            <td>
            <select id="id_autor" class="form-control" onchange="filtraAutor()">
                <option value="">Autores...</option>

                    <?php           
                        foreach($listadoAutores as $row){ ?>

                            <option value="<?php echo $row['id_autor'];?>"><?php echo $row['nombre_autor'];?> <?php echo $row['apellido_autor'];?></option>    

                    <?php  } ?>      

            </select>
            
            </td>

            <!-- COMBO BOX 2: Generos -->
            <td>Genero:</td>
            <td>

                <select id="id_genero" class="form-control" onchange="filtraGenero()">
                    <option value="">Generos...</option>

                    <?php           
                        foreach($listadoGeneros as $row){ ?>

                        <option value="<?php echo $row['id_genero'];?>"><?php echo $row['nombre_genero'];?></option>    

                    <?php  } ?>      

                </select>

            </td>

            <!-- COMBO BOX 3: Editorial -->
            <td>Editorial:</td>
            <td>
            <select id="id_editorial" class="form-control" onchange="filtraEditorial()">
                <option value="">Editorial...</option>

                    <?php           
                        foreach($listadoEditoriales as $row){ ?>

                            <option value="<?php echo $row['id_editorial'];?>"><?php echo $row['nombre_editorial'];?></option>    

                    <?php  } ?>      

            </select>
            
            </td>

            <!-- CUADRO TEXTO BUSQUEDA  
            <td>
                <input class="form-control"  type="text" name="" id="titulo_libro"  placeholder="Titulo Libro">                
            </td>
            <td>
                <button onclick="filtraTituloLibro()" class="btn btn-primary btn-sm">Buscar Libro</button>
            </td>-->
        </tr>
        
        
    </table>
