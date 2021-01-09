<?php

    $id_genero = $_GET['id_genero'];


?>


<html>
<head>
    

</head>
<body>

    <h3>¿Seguro desea eliminar este genero?</h3>
    
        <button onclick="eliminaGenero(<?php echo $id_genero; ?>)" data-dismiss="modal" class="btn btn-danger btn-sm">Eliminar</button></td>
        <button data-dismiss="modal" class="btn btn-success btn-sm">Cancelar</button>
        

</body>
</html>