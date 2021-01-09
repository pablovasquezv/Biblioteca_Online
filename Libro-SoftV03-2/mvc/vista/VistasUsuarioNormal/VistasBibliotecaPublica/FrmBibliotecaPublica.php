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

    <script src="../../../../js/FuncionesAdminSistema/FuncionesLibros/funcionesLibros.js"></script>
    <script src="../../../../js/FuncionesUsuarioNormal/FuncionesLibrosUsuariosNormal/FuncionesLibrosUN.js"></script>
    <script src="../../../../js/FuncionesUsuarioNormal/FuncionesLibrosUsuariosNormal/FuncionesBuscador.js"></script>
    <link rel='icon' href='../../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

    <title>Biblioteca Publica Usuario Normal | Libro-Soft V02</title>
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
                <li class="active"><a class="nav-link active font-weight-bold" href="../FrmHomeUsuarioNormal.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="../FrmAdminCuentaUsuario.php">Administrar Cuenta</a></li>
                              
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container well">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <h4 class="adminSistema">Biblioteca Comunitaria Libro-Soft v02</h4>

                <div class="container">
                    <div class="row">
                        <!-- Carga archivo con los filtros y cuadro de busqueda 
                        -->
                        <div class="col-3">
                            
                            <input class="form-control" type="text" id="cuadro_busqueda" placeholder="Buscar libro..." title="Busque Por Titulo, Nombre Autor, Genero o Editorial">
                        </div>
                        <div class="col-sm">
                            <div id="frmFiltros"></div>
                        </div>
                        
                    </div>
                </div>

                <hr>
                <div id="muestraBibliotecaLibroSoft" class="table-responsive">Listado Completo de Libros</div>
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="../../../../js/bootstrap.min.js"></script>          
   
</body>
</html>


 <!-- MODAL Peticion Prestamo -->
 <div class="modal fade" id="ModalCargaPeticionPrestamo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peticion de Prestamo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="frmPeticionPrestamo"></div>                                    
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

 <!-- MODAL DECIDE ELIMINAR Libros -->
 <div class="modal fade" id="ModalCargaDetalleLibro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detalle Libro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="frmLibroDetalle"></div>                                    
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>