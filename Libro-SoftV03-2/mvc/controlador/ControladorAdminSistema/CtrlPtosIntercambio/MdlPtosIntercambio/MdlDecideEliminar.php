<?php

    $id_pto_intercambio = $_GET['id_pto_intercambio'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar este punto de intercambio?</h3>
    
        <button onclick="eliminaPtoIntercambio(<?php echo $id_pto_intercambio; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>