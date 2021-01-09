<?php

    //Agrego los archivos con las clases PDO
   
    require('../../../modelo/PrestamoPDO.php');

    //Creo los objetos para acceder a las funciones de las clases
 
    $prestamoPDO = new PrestamoPDO();

    //Obtengo la id del libro seleccionado en el listado
    $id_prestamo = $_GET['id_prestamo'];

   
  

    //Consulta si existe un registro de prestamo en la tabla prestamos
    $resultadoLibroPrestamo = $prestamoPDO->obtienePrestamoAceptadosPrestatario($id_prestamo);


?>

<table class="table table-sm">
        
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
            <td><b> Rut Solicitante:</b></td>
            <td><p><?php echo $resultadoLibroPrestamo['Rut_prestatario']; ?></p></td>
        </tr>
        <tr>
            <td> <b>Nombre Solicitante:</b> </td>
            <td><p><?php echo $resultadoLibroPrestamo['Nombre_prestatario'] . " " . $resultadoLibroPrestamo['Apellido_prestatario'];  ?></p></td>
        
        </tr>
        <tr>
            <td class="table-primary"><b>Acción Recomendada:</b></td>
            <td class="table-primary">
                <?php
                    if ($resultadoLibroPrestamo["nombre_estado_prestamo"] == "Petición Aceptada") {
                        echo "Dirijase al punto de intercambio seleccionado para completar el prestamo.";
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
                        ?><p><?php echo $resultadoLibroPrestamo['fecha_termino_prestamo']; ?></p>
                    
                <?php } ?>


            </td>
        </tr>
        <tr>
            <td><b>Días Restantes:</b></td>
            <td>
            <?php

                    if($resultadoLibroPrestamo['fecha_termino_prestamo'] != "0000-00-00"){
                        //Convert to date
                        $fechaString = $resultadoLibroPrestamo['fecha_termino_prestamo'];//Your date
                        $fecha = strtotime($fechaString);//Converted to a PHP date (a second count)
                    
                        //Calculate difference
                        $diff = $fecha-time();//time returns current time in seconds
                        $days = floor($diff/(60*60*24));//seconds/minute*minutes/hour*hours/day)
                        $hours = round(($diff-$days*60*60*24)/(60*60));
                    
                        //Report
                        echo "$days Días $hours Horas<br/>";
                    
                        if(($days AND $hours) == 0){
                            echo "Finalizó el periodo de prestamo.";
                        }
                    
                    }else{
                        echo "No se pueden calcular los días restantes.";
                    }
                    
                    
                    
                    ?>

            </td>
        </tr>




        <tr>
            <td><b>Estado Prestamo:</b></td>
            <td> <p><?php echo $resultadoLibroPrestamo['nombre_estado_prestamo']; ?></p></td>
        </tr>

       

             
        </tr>
    </table>