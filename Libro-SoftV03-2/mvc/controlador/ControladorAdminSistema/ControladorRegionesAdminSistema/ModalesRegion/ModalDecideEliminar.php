<?php

    $id_region = $_GET['id_region'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar esta región?</h3>
    
        <button onclick="eliminaRegion(<?php echo $id_region; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>