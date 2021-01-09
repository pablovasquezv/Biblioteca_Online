<?php

    //Agrego los archivos con las clases PDO
    require('../../../../modelo/LibroPDO.php');
    require('../../../../modelo/PrestamoPDO.php');

    //Creo los objetos para acceder a las funciones de las clases
    $libroPDO = new LibroPDO();
    $prestamoPDO = new PrestamoPDO();

    //Obtengo la id del libro seleccionado en el listado
    $id_libro = $_GET['id_libro'];

    //Obtengo el registro con los datos del libro seleccionado
    $listadoLibro = $libroPDO->obtieneLibroIdLibro($id_libro);

    //Consulta si existe un registro de prestamo en la tabla prestamos
    $resultadoLibroPrestamo = $prestamoPDO->obtienePrestamoPorIdLibro($id_libro);

    //Obtengo rut
    session_start();
    $rut_usuario = $_SESSION['rut_usuario'];

?>

<table class="table table-sm">
        

<?php  
         
    foreach($listadoLibro as $row){ ?>

        <!-- Este el el contenido de la tabla -->
        <tr>
            <td><b>ISBN:</b></td>
            <td><p><?php echo $row['id_libro']; ?></p></td>
            
        </tr>
        <tr>
            <td> <b>Titulo de Libro:</b> </td>
            <td><p><?php echo $row['titulo_libro']; ?></p></td>
          
        </tr>
        <tr>
            <td> <b>Nombre Autor:</b> </td>
            <td><p><?php echo $row['nombre_autor'] . " " . $row['apellido_autor'];  ?></p></td>
        
        </tr>
        <tr>
            <td> <b>Genero:</b> </td>
            <td><p><?php echo $row['nombre_genero']; ?></p></td>
        </tr>
        <tr>
            <td> <b>Editorial:</b> </td>
            <td><p><?php echo $row['nombre_editorial']; ?></p></td>
        </tr>
        <tr>
            <td> <b>Numero de Páginas:</b> </td>
            <td> <p><?php echo $row['num_paginas_libro']; ?></p></td>
        </tr>
        <tr>
            <td> <b>Descripcion:</b> </td>
            <td> <p><?php echo $row['descripcion_libro']; ?></p></td>
        </tr>
        <tr>
            <td><b>Dueño Libro:</b></td>
            <td>
            <?php

                echo $row['nombres_usuario'] . " " . $row['ap_paterno_usuario'] ;


            ?>
            </td>
        </tr>

        <tr>
            <td> <b>Prestamo:</b> </td>
            <td>

                <?php   
                    //Si el rut del usuario en sesion es igual al del dueño del libro
                    if($row['rut_usuario'] == $rut_usuario){
                        //Mostrar el mensaje que diga no es posible auto-prestarse un libro
                        echo "<b>NO ES POSIBLE HACER UN AUTO PRESTAMO</b>";
                    }else{
                        //Si es diferente el rut
                        //Si no existe ningun registro en la tabla prestamos con el id del libro 
                        //O existe un registro, pero está en estado 10 (id_estado_prestamo)
                        if(($resultadoLibroPrestamo == '') || ($resultadoLibroPrestamo['id_estado_prestamoTP'] == 10)){
                            //Mostrar el botón para hacer la petición de prestamo
                            ?><button onclick="cargaPeticionPrestamo(<?php echo $row['id_libro']; ?>)"  class="btn btn-primary btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#ModalCargaPeticionPrestamo" >Solicitar Prestamo</button> <?php
                        }else if($resultadoLibroPrestamo['id_estado_prestamoTP'] == 2){
                            //Mostrar el botón para hacer la petición de prestamo
                            ?><button onclick="cargaPeticionPrestamo(<?php echo $row['id_libro']; ?>)"  class="btn btn-primary btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#ModalCargaPeticionPrestamo" >Solicitar Prestamo</button> <?php
                        }else if($resultadoLibroPrestamo['id_estado_prestamoTP'] == 3){
                            //Mostrar el botón para hacer la petición de prestamo
                            ?><button onclick="cargaPeticionPrestamo(<?php echo $row['id_libro']; ?>)"  class="btn btn-primary btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#ModalCargaPeticionPrestamo" >Solicitar Prestamo</button> <?php
                        }else if($resultadoLibroPrestamo['id_estado_prestamoTP'] == 7){
                            //Mostrar el botón para hacer la petición de prestamo
                            ?><button onclick="cargaPeticionPrestamo(<?php echo $row['id_libro']; ?>)"  class="btn btn-primary btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#ModalCargaPeticionPrestamo" >Solicitar Prestamo</button> <?php
                        }else{
                            //De lo contrario mostrar un mensaje diciendo que el libro esta prestado.
                            echo "<b>LIBRO PRESTADO </b>";
                        }

                    }  ?>

            </td>
        </tr>

             
        </tr>
    
<?php  } ?>

    </table>