<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/estilo.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/FuncionesInvitado/funcionesAgregarUsuario.js"></script>
    <script src="../../../js/FuncionesInvitado/validarRUT.js"></script>

    <link rel='icon' href='../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />
    

    <title>Registro Usuario</title>
  </head>
  <body>
    
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
                                <a href="FrmLogin.php"><button type="button" class="btn btn-primary" data-dismiss="modal"> Iniciar Sesión</button></a>
                        </li>
                        <li class="nav-item">
                            <a href="FrmRegistroUsuarioNormal.php"><button type="button" class="btn btn-success" data-dismiss="modal">Crear Cuenta</button></a>
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
                <li class="active"><a class="nav-link active font-weight-bold" href="../../../index.html">INICIO</a></li>
                <li class="active"><a class="nav-link" href="index.html">¿Quiénes somos?</a></li>
                <li class="active"><a class="nav-link" href="index.html"> Preguntas Frecuentes</a></li>               
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container well text-center">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <h3>Registro usuario nuevo</h3>
                <hr>
                <h6>*Todos los campos son obligatorios</h6>

                <div class="row">
                    <div class="col-sm">                      
                    </div>
                    <div class="col-sm"> 
                        <form action="../../controlador/ControladorInvitado/AgregaUsuarioControlador.php" method="post">
                            <div id="frmCrearCuenta" class="text-center"></div>                    
                        </form>                  
                    </div>
                    <div class="col-sm">                      
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
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="../../../js/bootstrap.min.js"></script>          
   
</body>
</html>