<?php

    //LOGOUT CLIENTE / ADMINISTRADOR

    //Con esto indicamos la sesion que deseamos cerrar
    //A pesar de que existe solo una sesion
    //Entonces reanudamos la sesion existente
    session_start();
    //Y con esto destruimos la sesion y redirigimos al login
    session_destroy();
    echo "Cerrando Sesión <br> Hasta Pronto!!";
    header("Refresh:2; url=../../../index.html");
    
?>