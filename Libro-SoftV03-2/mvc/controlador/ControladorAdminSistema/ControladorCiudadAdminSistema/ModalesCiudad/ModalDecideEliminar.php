<?php

    $id_ciudad = $_GET['id_ciudad'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar esta ciudad?</h3>
    
        <button onclick="eliminaCiudad(<?php echo $id_ciudad; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>