<?php 

    require('../../../modelo/PrestamoPDO.php');
    $prestamoPDO = new PrestamoPDO();

    if(isset($_POST['btn_acepta_peticion'])){

        $id_prestamo = $_POST['hdn_id_prestamo'];
        $dias_prestamo = $_POST['dias_prestamo'];
        $id_punto_intercambio = $_POST['id_punto_intercambio'];

        $prestamoPDO->actualizaAceptaPrestamo($id_prestamo, 1, $id_punto_intercambio, $dias_prestamo);

        //$prestamoPDO->actualizaPrestamo($id_prestamo, 1,  "7354737-7", "18320291-K", 2, 1, $dias_prestamo, "", "");

        header("Refresh:0; url=../../../vista/VistasUsuarioNormal/VistasPrestamosPeticiones/FrmPrestamosRecibidosEC.php");

    }

?>