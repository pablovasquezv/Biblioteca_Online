<?php

    //Agrego los archivos con las clases PDO
    require('../../../../modelo/LibroPDO.php');

    //Creo los objetos para acceder a las funciones de las clases
    $libroPDO = new LibroPDO();

    //Obtengo la id del libro seleccionado en el listado
    $id_libro = $_GET['id_libro'];

    //Obtengo el registro con los datos del libro seleccionado
    $listadoLibro = $libroPDO->obtieneLibroIdLibro($id_libro);

    //Obtengo rut
    session_start();
    $rut_usuario = $_SESSION['rut_usuario'];

?>



    <?php           
        foreach($listadoLibro as $row){ ?>
        
        <div class="container">
            <h5>¿Está seguro de hacer una petición del siguiente libro?</h5>
            <p><b>Título libro:</b>  <?php echo $row['titulo_libro']; ?></p>
            <p><b>Dueño libro:</b> <?php echo $row['nombres_usuario'] . " " . $row['ap_paterno_usuario']; ?></p>
            
            <p><b>Por favor, si confirma el prestamo esté atento a las notificaciones de la sección Prestamos y Peticiones.</b></p>
            
            <form action="../../../controlador/ControladorUsuarioNormal/ControladorPrestamoUN/ControladorPrestamoUN.php" method="post">

                <input type="hidden" name="hdn_id_libro" value="<?php echo $row['id_libro']; ?>">
                <input type="hidden" name="hdn_rut_dueno_libro" value="<?php echo $row['rut_usuario']; ?>">
                <input type="hidden" name="hdn_rut_prestatario_libro" value="<?php echo $rut_usuario ?>">
                <button type="submit" class="btn btn-success btn-sm" name="btn_registrar_prestamo">Confirmar Prestamo</button><button class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>                 

            </form>
            
            <!-- <button onclick="RegistrarPrestamo()"  class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalCargaDetalleLibro" >Confirmar</button>
            -->
        </div>
        
    

    <?php  } ?>

    