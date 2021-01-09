<?php

    $id_autor = $_GET['id_autor'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar este autor?</h3>
    
        <button onclick="eliminaAutor(<?php echo $id_autor; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>