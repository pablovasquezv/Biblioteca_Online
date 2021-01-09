<?php

    //Agrego los archivos con las clases PDO
   
    require('../../../modelo/PrestamoPDO.php');

    //Creo los objetos para acceder a las funciones de las clases
 
    $prestamoPDO = new PrestamoPDO();

    //Obtengo la id del libro seleccionado en el listado
    $id_prestamo = $_GET['id_prestamo'];

   
  

    //Consulta si existe un registro de prestamo en la tabla prestamos
    $resultadoLibroPrestamo = $prestamoPDO->obtienePrestamoEnCursoAceptadosPorIdPrestamo($id_prestamo);


?>

<table class="table table-sm table-responsive">
        


        <!-- Este el el contenido de la tabla -->
        <tr>
            <td><b>Id Prestamo:</b></td>
            <td><p><?php echo $resultadoLibroPrestamo['id_prestamo']; ?></p></td>
            
        </tr>
        <tr>
            <td><b> Titulo Libro:</b></td>
            <td><p><?php echo $resultadoLibroPrestamo['titulo_libro']; ?></p></td>
            
          
        </tr>
        <tr>
            <td><b>Dueño Libro:</b></td>
            <td><p><?php echo $resultadoLibroPrestamo['Nombre_prestador'] . " " .$resultadoLibroPrestamo['Apellido_prestador']; ?></p></td>
        </tr>

        <tr>
            <td class="table-primary"><b>Acción Recomendada:</b></td>
            <td class="table-primary">
                <?php
                    if ($resultadoLibroPrestamo["nombre_estado_prestamo"] == "Petición Aceptada") {
                        echo "El libro aún no ha sido entregado en punto de intercambio. Este atento a nuevas actualizaciones por favor.";
                    }else if($resultadoLibroPrestamo["nombre_estado_prestamo"] == "Espera retiro prestatario"){
                        echo "¡¡Diríjete al punto de intercambio indicado para retirar el libro solicitado!!";
                    }else if($resultadoLibroPrestamo["nombre_estado_prestamo"] == "Prestado"){
                        echo "Ya tienes el libro solicitado. Disfrutalo. Recuerda estár atento a la fecha de termino del prestamo para su devolución.";
                    }

                ?>
            </td>
        </tr>
        <tr>
            <td class="table-primary"> <b>Punto Intercambio:</b> </td>
            <td class="table-primary"> <p><?php echo $resultadoLibroPrestamo['nombre_pto_intercambio']; ?></p></td>
        </tr>        
        <tr>
            <td class="table-primary"><b>Direccion Pto Intercambio:</b></td>
            <td class="table-primary"><p><?php echo $resultadoLibroPrestamo['direccion_pto_intercambio']; ?></p></td>
        </tr>
        
        <tr>
            <td><b>Días Prestamo Definidos:</b></td>
            <td> <p><?php echo $resultadoLibroPrestamo['dias_prestamo']; ?></p></td>
        </tr>
        <tr>
            <td><b>Fecha Inicio Prestamo:</b></td>
            <td> 
                <?php
                    //Compruebo que se iniciado el prestamo
                    //Si la fecha esta nula 0000-00-00
                    if ($resultadoLibroPrestamo['fecha_inicio_prestamo'] == "0000-00-00") {
                        //Que indique que aún no se inicia el periodo de prestamo
                        echo "Aún no ha iniciado el periodo de prestamo";

                    }else{
                        //Si no, que muestre la fecha de inicio
                        ?><p><?php echo $resultadoLibroPrestamo['fecha_inicio_prestamo']; ?></p>
                    
                <?php } ?>
       
            </td>
        </tr>
        <tr>
            <td><b>Fecha Termino Prestamo:</b></td>
            <td>
                <?php
                    //Compruebo que se iniciado el prestamo
                    //Si la fecha esta nula 0000-00-00
                    if ($resultadoLibroPrestamo['fecha_inicio_prestamo'] == "0000-00-00") {
                        //Que indique que aún no se inicia el periodo de prestamo
                        echo "Aún no ha iniciado el periodo de prestamo";

                    }else{
                        //Si no, que muestre la fecha de inicio
                        ?><p><?php echo $resultadoLibroPrestamo['fecha_inicio_prestamo']; ?></p>
                    
                <?php } ?>


            </td>
        </tr>
        <tr>
            <td><b>Días Restantes:</b></td>
            <td>
                Hola hola!!

            </td>
        </tr>
        
        <tr>
            <td><b>Estado Prestamo:</b></td>
            <td> <p><?php echo $resultadoLibroPrestamo['nombre_estado_prestamo']; ?></p></td>
        </tr>

       

             
        </tr>
    
    </table>