<?php

    $id_prestamo = $_GET['id_prestamo'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea Cancelar esta petición?</h3>
    
        <button onclick="CancelaPeticionPrestamo(<?php echo $id_prestamo; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Rechazar Petición</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>