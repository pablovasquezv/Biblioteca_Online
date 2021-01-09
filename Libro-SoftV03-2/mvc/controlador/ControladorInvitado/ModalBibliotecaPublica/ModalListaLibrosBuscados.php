<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require_once("../../../modelo/LibroPDO.php");

$libroPDO = new LibroPDO();

//$titulo_libro =  $_POST['titulo_libro'];
    if(isset($_POST['consulta'])){

        $consulta = $_POST['consulta'];

        $nuevaConsulta =  "%".$consulta."%";

        //echo $nuevaConsulta;

        $listadoLibros = $libroPDO->obtieneLibrosFiltroDinamicoPorTitulo($nuevaConsulta);

        if($listadoLibros){
            
            echo "<table class='table'>
                    <tr class='table-active'>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Genero</th>
                        <th>Editorial</th>
                        <th>Páginas</th>
                        <th>Ver Libro</th>
                         
                    </tr>";
                foreach($listadoLibros as $row){ 
                    echo "<!-- Este el el contenido de la tabla -->
                    <tr>
                        <td>" . $row['id_libro'] . "</td>
                        <td>". $row['titulo_libro'] . "</td>
                        <td>" . $row['nombre_autor'] . " " . $row['apellido_autor'] . "</td>
                        <td>" . $row['nombre_genero'] . " </td>
                        <td>" . $row['nombre_editorial'] . " </td>
                        <td>" . $row['num_paginas_libro'] . " </td>
                        
            
                        <td><button onclick='cargaLibroDetalleInvitado(".$row["id_libro"].")' class='btn btn-primary btn-sm' data-toggle='modal' data-target='#ModalCargaDetalleLibroInvitado' >Ver Libro</button></td>
                    </tr>";
                
                }
            echo "</table>";
        }else{
            echo "BUSCANDO... ";
        }

        

    }

?>      