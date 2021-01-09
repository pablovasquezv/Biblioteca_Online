<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../css/estilo.css">
    <link rel="stylesheet" href="../../../../css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <link rel='icon' href='../../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

    <title>Prestmos y Peticiones Usuario Normal | Libro-Soft V02</title>
  </head>
  <body>
<?php
    //Filtro para evitar que usuario no "logueados" puedan acceder a esta pagina
    session_start();
    if(!isset($_SESSION['rut_usuario'])){
        header("location:../VistasInvitado/FrmLogin.php");
    }
?>       
    <!-- TODO EL CONTENIDO CENTRADO -->
    <div class="container shadow-lg p-3 mb-5 bg-white rounded">
        <!--  INICIO HEADER -->
        <header class="encabezado">            
            <div>                
                <br><!-- Espacio -->
                <!-- LOGO LIBRO-SOFT -->
                <div class="media">
                    <img src="../../../../media/img/Logos/LibroSoft Rojo 2 Transparente.png" class="align-self-start" alt="" width="250" height="100">
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
        <!-- Justificados a la izquierda -->
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark nav rounded" >
            <ul class="navbar-nav">
                <li class="active"><a class="nav-link active font-weight-bold" href="../FrmHomeUsuarioNormal.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="../FrmAdminCuentaUsuario.php">Administrar Cuenta</a></li>
                              
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container well shadow-lg p-3 mb-5 bg-white rounded">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
              <h3 style="text-align: center">Prestamos y Peticiones</h3>
                <div id="Prestamo"></div>
                <hr>
            <div class="row">
                <div class="col-sm">
                    <h3 style="text-align: center">Prestamos y Peticiones Realizados</h3>
                    <a href="VistasHechasPorMi/FrmPeticionesRealizadas.php"><button class="btn btn-outline-primary" title="Revice el estado de todas sus peticiones en curso"><img src="../../../../media/img/BotonesPPRealizados.jpg" class="img-fluid" alt="Responsive image" alt="500" width="450"></button></a>
                    <a href="VistasHechasPorMi/FrmPrestamoAceptado.php"><button class="btn btn-outline-primary" title="LISTADO CON TODOS LOS PRESTAMOS HECHOS HACIA LA BIBLIOTECA PUBLICA (HACIA OTROS USUARIOS)"><img src="../../../../media/img/BotonesPPRealizados2.jpg" class="img-fluid" alt="Responsive image" alt="500" width="450"></button></a>

                </div>
                <div class="col-sm">
                    <h3 style="text-align: center">Prestamos y Peticiones Recibidos</h3>
                      
                    <a href="FrmPeticionPrestamosBP.php" ><button class="btn btn-outline-primary" title="Acepte o rechace peticiones de prestamo recibidos a su biblioteca"><img src="../../../../media/img/BotonesPPRecibidos1.jpg" class="img-fluid" alt="Responsive image" alt="500" width="450" ></button></a>
                
                <a href="FrmPrestamosRecibidosEC.php" ><button class="btn btn-outline-primary" title="Acepte o rechace peticiones de prestamo recibidos a su biblioteca"><img src="../../../../media/img/BotonesPPRecibidos2.jpg" class="img-fluid" alt="Responsive image" alt="500" width="450" ></button></a>
               
            
            
                </div>
            </div>
            <hr>
            
                

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    
</body>
</html>