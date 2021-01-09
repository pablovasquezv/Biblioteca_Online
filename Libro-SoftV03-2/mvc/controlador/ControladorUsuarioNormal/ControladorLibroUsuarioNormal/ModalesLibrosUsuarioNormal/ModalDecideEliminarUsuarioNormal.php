<?php

    $id_libro = $_GET['id_libro'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar este libro?</h3>
    
        <button onclick="eliminaLibroUsuarioNormal(<?php echo $id_libro; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>