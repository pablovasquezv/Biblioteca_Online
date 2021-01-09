<?php

    $id_editorial = $_GET['id_editorial'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar esta editorial?</h3>
    
        <button onclick="eliminaEditorial(<?php echo $id_editorial; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>