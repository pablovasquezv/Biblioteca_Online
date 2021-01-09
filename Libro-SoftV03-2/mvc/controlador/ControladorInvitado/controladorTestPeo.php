<?php

    require("../../modelo/LibroPDO.php");

    $libroPDO = new LibroPDO();

    if(isset($_GET['btn_muestra_libros'])){

        $rut_usuario = $_GET['txt_rut'];

        $misLibros = $libroPDO->obtieneLibrosPersonales($rut_usuario);

        //var_dump($misLibros);

        echo "<table>
                <tr>
                    <td>Nombre Usuario</td>
                    <td>Titulo Libro</td>
                    <td>Autor</td>
                    <td>Genero</td>
                    <td>Editorial</td>
                </tr>";

        foreach($misLibros as $row){
            echo "<tr>
                    <td>". $row['nombres_usuario']."</td>
                    <td>". $row['titulo_libro']."</td>
                    <td>". $row['nombre_autor']."</td>
                    <td>". $row['nombre_genero']."</td>
                    <td>". $row['nombre_editorial']."</td>
                </tr>";
        }
        
        echo "</table>";
        

    }

?>

