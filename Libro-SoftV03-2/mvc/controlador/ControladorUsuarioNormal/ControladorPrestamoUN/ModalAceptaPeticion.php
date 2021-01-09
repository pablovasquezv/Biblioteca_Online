<?php

    require('../../../modelo/PuntoIntercambioPDO.php');

    $ptosIntercambioPDO = new PuntoIntercambioPDO();

    $listadoPuntosIntercambio = $ptosIntercambioPDO->obtienePuntosIntercambio();

    $id_prestamo = $_GET['id_prestamo'];


?>


<html>
<head>
    

</head>
<body>

    <h5>Complete los siguientes campos para confirmar</h5>


    <form action="../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ControladorAceptaPrestamo.php" method="post">   
        <table>
            
            <tr>
                <td>Cantidad de días:</td>
                <td><input class="form-control" type="number" id="" name="dias_prestamo" required></td>
            </tr>
            <tr>
                <td>Punto de Intercambio:</td>
                <td>
                    <select id="" name="id_punto_intercambio" class="form-control" required>
                        <option value="">Puntos Intercambio...</option>

                        <?php           
                            foreach($listadoPuntosIntercambio as $row){ ?>

                        <option value="<?php echo $row['id_pto_intercambio'];?>"><?php echo $row['nombre_pto_intercambio'];?></option>    

                    <?php  } ?>      

                    </select>

                            
                </td>
                <td>
                    <input  type="hidden" name="hdn_id_prestamo" value="<?php echo $id_prestamo; ?>">
                </td>
            </tr>
        </table>

    
        <!-- <button onclick="aceptaPrestamo()" data-dismiss="modal" >Confirmar Prestamo</button></td> -->
        <button type="submit" name="btn_acepta_peticion" class="btn btn-success btn-sm">Confirmar Petición</button>
        <button data-dismiss="modal" class="btn btn-danger btn-sm">Cancelar</button>
        
    </form>
    
    
</body>
</html>