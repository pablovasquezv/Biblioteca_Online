<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../../../css/estilo.css">
    <link rel="stylesheet" href="../../../../../css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="../../../../../js/FuncionesUsuarioNormal/FuncionesLibrosUsuariosNormal/FuncionesPrestamosUN.js"></script>
    <script src="../../../../../js/FuncionesUsuarioNormal/FuncionesLibrosUsuariosNormal/FuncionesPeticionesHechosPorMi.js"></script>
   
    <link rel='icon' href='../../../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

    <title>Prestamos y Peticiones Biblioteca Usuario | Libro-Soft V03</title>
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
    <div class="container">
        <!--  INICIO HEADER -->
        <header class="encabezado">            
            <div>                
                <br><!-- Espacio -->
                <!-- LOGO LIBRO-SOFT -->
                <div class="media">
                    <img src="../../../../../media/img/Logos/LibroSoft Rojo 2 Transparente.png" class="align-self-start" alt="" width="250" height="100">
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
                                <a href="../../../../controlador/ControladorInvitado/LogOutControlador.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar Sesión</button></a>
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
                <li class="active"><a class="nav-link active font-weight-bold" href="../../FrmHomeUsuarioNormal.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="../../FrmAdminCuentaUsuario.php">Administrar Cuenta</a></li>
                              
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container well">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
               <h3><a href="../FrmPrestamosPeticiones.php"><button class="btn btn-outline-dark"><< Volver</button></a> Estado Peticiones Realizadas</h3>
                <div id="Prestamo"></div>
                <hr>
                <!-- BARRA NAVEGACIÓN ENTRE LISTADOS DE PETICIONES EN ESPERA, CANCELADAS O RECHAZADAS -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="FrmPeticionesRealizadas.php"><b>EN ESPERA RESPUESTA</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FrmPeticionesCanceladas.php">Canceladas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FrmPeticionesRechazadas.php">Rechazadas</a>
                    </li>                  
                </ul>
                               
                    <div id="frmPeticionesHechasPorMiEnEsperaRespuesta"></div>
                   
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
    
    <div class="modal fade" id="ModalCancelaPetcion" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cancelar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="FrmCancelaPeticion"></div>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>










    <!-- JavaScript -->
    <!-- jQuery primero Después Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        
   
</body>
</html>