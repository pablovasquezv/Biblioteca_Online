<?php 

require('../../../modelo/PrestamoPDO.php');
$prestamoPDO = new PrestamoPDO();
        
    if (isset($_POST['btn_registrar_prestamo'])){
        
        $id_prestamo_mula = 0;
        $id_libroTP = $_POST['hdn_id_libro'];
        $rut_dueno_libro = $_POST['hdn_rut_dueno_libro'];
        $rut_prestatario = $_POST['hdn_rut_prestatario_libro'];

        $prestamoPDO->agregaPrestamo(0, $rut_dueno_libro, $rut_prestatario, $id_libroTP, 1, 7, "", "");

        header("Refresh:0; url=../../../vista/VistasUsuarioNormal/VistasPrestamosPeticiones/FrmPeticionPrestamosUB.php");

    }

    

?>


