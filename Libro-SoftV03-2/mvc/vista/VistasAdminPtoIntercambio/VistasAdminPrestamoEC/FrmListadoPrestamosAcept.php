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

    <script src="../../../../js/FuncionesAdminPtoIntercambio/FuncionesAdminPtoIntercambio.js"></script>

    <title>Home Admin Punto Intercambio - Libro-Soft v03-2</title>
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
                <li class="active"><a class="nav-link active font-weight-bold" href="../FrmHomeAdminPtoIntercambio.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="../FrmAdminCuentaAdminPtoInter.php">Administrar Cuenta</a></li>           
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                
                <h4><a href="../FrmHomeAdminPtoIntercambio.php"><button class="btn btn-outline-dark"><< Volver</button></a> Punto de Intercambio: <?php echo $_SESSION['nombre_pto_intercambio']?> | <?php echo $_SESSION['nombre_ciudad']?> | <?php echo $_SESSION['direccion_pto_intercambio']?></h4>
                <hr>
                <!-- BARRA NAVEGACIÓN ENTRE LISTADOS DE PRESTAMOS SEGÚN EL ESTADO EN QUE SE ENCUENTREN -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="FrmListadoPrestamosEC.php">TODOS LOS PRESTAMOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="FrmListadoPrestamosAcept.php">Aceptados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FrmListadoPrestamosEspRetPres.php">Espera Retiro Prestatario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FrmListadoPrestados.php">Prestado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="FrmListadoDevueltoPto.php">Devuelto a Pto Intercambio</a>
                    </li>                   
                </ul>

                <hr>


                
                    <div id="frmListadoPrestamosAceptados">LISTADO PRESTAMOS EN CURSO ACEPTADOS</div>

                <hr>
                <h6>Home Punto Intercambio | Nombre Usuario: <?php echo $_SESSION['nombre_usuario'] ." " .  $_SESSION['ap_paterno_usuario']?> | Fecha: <?php echo date("d-m-Y");?></h6>
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
    
    
        <!-- MODAL MODIFICA ESTADO PRESTAMO -->
        <div class="modal fade" id="ModalModificaEstadoPrestamoAceptado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Estado Prestamo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="frmModificaEstadoPrestamoAceptado"></div>                                    
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>


        <!-- MODAL DETALLE PRESTAMO -->
        <div class="modal fade" id="ModalDetallePrestamoEnCursoAdmin" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Detalle Prestamo En Curso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
               <div id="frmModalDetallePrestamoEnCursoAdmin"></div>
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
    <script src="../../../../js/bootstrap.min.js" ></script>          
   

</body>
</html>