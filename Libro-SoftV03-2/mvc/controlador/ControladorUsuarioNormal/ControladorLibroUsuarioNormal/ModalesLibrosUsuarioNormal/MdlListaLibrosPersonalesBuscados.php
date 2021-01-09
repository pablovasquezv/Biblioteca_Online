<?php

//Agrego el archivo RegionPDO para acceder a sus funciones 
require_once("../../../../modelo/LibroPDO.php");

$libroPDO = new LibroPDO();

//$titulo_libro =  $_POST['titulo_libro'];
    if(isset($_POST['consulta'])){

        $consulta = $_POST['consulta'];

        $nuevaConsulta =  "%".$consulta."%";

        //echo $nuevaConsulta;
        session_start();
        $rut_usuario = $_SESSION['rut_usuario'];

        $listadoLibros = $libroPDO->obtieneLibrosFiltroDinamicoLibrosPersonales($rut_usuario, $nuevaConsulta);

        if($listadoLibros){
            
            echo "<table class='table'>
                    <tr class='table-active'>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Autor</th>
                        <th>Genero</th>
                        <th>Editorial</th>
                        <th>Páginas</th>
                        <th>Eliminar</th>
                        <th>Modificar</th>                
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
                        
                        <td> <button onclick='cargaModalDecideEliminarLibro( " . $row['id_libro'] . " )' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#ModalDecideEliminarLibro'>Eliminar</button></td>
                        <td> <button onclick='cargaModalModificaLibroUsuarioNormal( " .  $row['id_libro'] . " )' class='btn btn-warning btn-sm' data-toggle='modal' data-target='#ModalModificaLibro'>Modificar</button></td>
                        
                    </tr>";
                
                }
            echo "</table>";
        }else{
            echo "BUSCANDO... ";
        }

        

    }

?>      
