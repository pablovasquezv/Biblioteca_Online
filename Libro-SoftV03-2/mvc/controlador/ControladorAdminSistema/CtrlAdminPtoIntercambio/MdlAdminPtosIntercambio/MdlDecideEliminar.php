<?php

    
    $rut_usuario = $_GET['rut_usuario'];
    $id_usu_admin_pto_inter = $_GET['id_usu_admin_pto_inter'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar este administrador de punto de intercambio?</h3>
       
        
        <button onclick="eliminaAdminPtoIntercambio('<?php echo $rut_usuario; ?>', '<?php echo $id_usu_admin_pto_inter; ?>')" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>