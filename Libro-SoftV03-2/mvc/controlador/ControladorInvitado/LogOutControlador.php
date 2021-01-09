<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/estilo.css">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>

    <script src="../../../../js/FuncionesAdminSistema/FuncionesLibros/funcionesLibros.js"></script>
    <link rel='icon' href='../../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />
    
    <title>Saliendo de Libro-Soft | Libro-Soft V03-1</title>
  </head>
  <body>
<?php
    
    //Inicio sesión 
    session_start();
    //Destruyo la sesión y elimino todos los datos almacenados de esta sesion especifica
    session_destroy();
    //Reenvió hacia el Index
    header("Refresh:3; url=../../../index.html");

?>       
    <!-- TODO EL CONTENIDO CENTRADO -->
    <div class="container">
        <!--  INICIO HEADER -->
        <header class="encabezado">            
            <div>                
                <br><!-- Espacio -->
                <!-- LOGO LIBRO-SOFT -->
                <div class="media">
                    <img src="../../../media/img/Logos/LibroSoft Rojo 2 Transparente.png" class="align-self-start" alt="" width="250" height="100">
                    <div class="media-body"> </div>
                </div>   
            </div>                
            <div>
                <!-- Barra navegación para botones en el header -->
                <!-- Botones Para Registrarse e Iniciar Sesión / Boton Agregar Libros-->
                <nav>
                    <!-- Justificados a la derecha -->
                    <ul class="nav justify-content-end">
                        <li class="nav-item">
                                <a href="../../../controlador/ControladorInvitado/LogOutControlador.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar Sesión</button></a>
                        </li><br>                                                
                    </ul>                                         
                </nav>
                <br><!-- Espacio -->
            </div>                           
        </header><!-- FIN HEADER -->

        <!-- INICIO BARRA NAVEGACIÓN PRINCIPAL -->
        <!-- Justificados a la izquierda 
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark nav rounded" >
            <ul class="navbar-nav">
                <li class="active"><a class="nav-link active font-weight-bold" href="../FrmHomeUsuarioNormal.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="#">Administrar Cuenta</a></li>
                              
            </ul>  
                    
        </nav> FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container well">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <h4 class="adminSistema">CERRANDO SESIÓN</h4>
                <div class="text-center">
                    <img src="../../../media/img/Logos/SoloLogo.png" class="text-center" alt="" width="100" height="100">
                    <hr>
                    <h2>Hasta Pronto</h2>
                    <hr>
                    <p>Usted será dirigido hacia la página de inicio.</p>
                </div>
                


            </div>
        </section>
            
            
        <!-- Footer -->
        <footer class="page-footer font-small blue">

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Libro-Soft:
                <a href="#"> libro-soft.cl</a>
            </div>
            <!-- Copyright -->

        </footer>
        
    </div>
    
    










    <!-- JavaScript -->
    <!-- jQuery primero Después Bootstrap JS -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="../../../..//js/bootstrap.min.js"></script>          
   
</body>
</html>