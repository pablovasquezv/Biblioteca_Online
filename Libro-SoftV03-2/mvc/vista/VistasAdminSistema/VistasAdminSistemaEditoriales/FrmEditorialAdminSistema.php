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
    <script src="../../../../js/bootstrap.min.js"></script>
    <script src="../../../../js/FuncionesAdminSistema/FuncionesEditoriales/funcionesEditoriales.js"></script>  
    <link rel='icon' href='../../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

    <title>Editorial Admin Sistema - Libro-Soft V02</title>
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
                            <a href="../../../controlador/ControladorInvitado/LogOutControlador.php"><button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar Sesión</button></a>
                        </li>                                             
                    </ul>                                         
                </nav>
                <br><!-- Espacio -->
            </div>                           
        </header><!-- FIN HEADER -->

        <!-- INICIO BARRA NAVEGACIÓN PRINCIPAL -->
        <!-- Justificados a la izquierda -->
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark nav rounded" >
            <ul class="navbar-nav">
                <li class="active"><a class="nav-link active font-weight-bold" href="../FrmHomeAdminSistema.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="../FrmAdminCuentaAdminSist.php">Administrar Cuenta</a></li>
                <li class="active"><a class="nav-link" href="#">Administradores del Sistema</a></li>               
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <h6>Bienvenido: <?php echo $_SESSION['nombre_usuario'] ." " .  $_SESSION['ap_paterno_usuario']?></h6>
                <h4 class="adminSistema">Editorial</h4>

                <a href="../FrmHomeAdminSistema.php"><button class="btn btn-outline-dark"><< Volver</button></a>

                <button onclick="cargaModalAgregaEditorial()" class="btn btn-success btn"  data-toggle="modal" data-target="#ModalAgregaEditorial">Agregar Editorial</button>
                <hr>
                <div id="muestraEditorial" class="table-responsive">Listado de Editoriales</div>
                
                <!-- MODAL AGREGA Editoriales -->
                <div class="modal fade" id="ModalAgregaEditorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Agrega Editorial</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="frmAgregaEditorial"></div>                                    
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL DECIDE ELIMINAR Editorial -->
                <div class="modal fade" id="ModalDecideEliminarEditorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Eliminar Editorial</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="frmEliminaEditorial"></div>                                    
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MODAL MODIFICA Editorial -->
                <div class="modal fade" id="ModalModificaEditorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar Editorial</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div id="frmModificaEditorial"></div>                                    
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="../../../../js/bootstrap.min.js"></script>
    <script src="../../../../js/FuncionesAdminSistema/FuncionesRegiones/funcionesRegiones.js"></script>              
   
</body>
</html>





