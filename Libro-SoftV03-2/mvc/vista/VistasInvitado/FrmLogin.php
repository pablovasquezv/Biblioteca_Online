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
    <script src="../../../js/FuncionesInvitado/validarRUT.js"></script>
    <link rel='icon' href='../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

    <title>Login | Libro-Soft V02</title>
  </head>
  <body class="text-center">
    
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
            <div class="container">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <div class="text-center">
                    <img src="../../../media/img/Logos/SoloLogo.png" class="text-center" alt="" width="100" height="100">
                    </div>
                <h3>Bienvenido</h3>
                <hr>
                <form action="../../controlador/ControladorInvitado/LoginControlador.php" method="post" class="">

                <div class="row">
                    <div class="col-sm">
                      
                    </div>
                    <div class="col-sm">
                      
                        <div class="text-center">                 
 
                            <input class="form-control" type="text" name="txt_rut_usuario" id="rut" placeholder="Rut Usuario"  oninput="checkRut(this)" required>

                            <input class="form-control" type="password" name="txt_password_usuario" id="" placeholder="Contraseña" required><hr>

                            <input type="submit" value="Iniciar Sesión" name="btn_iniciar_sesion" class="btn btn-success"><hr>

                            ¿No está registrado aún?<br>


                            <a href="FrmRegistroUsuarioNormal.php"><button type="button" class="btn btn-success" data-dismiss="modal"> Registrese</button></a>
                       
                    
                        </div>

                    </div>
                    <div class="col-sm">
                      
                    </div>
                </div>
              </form>
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
    <script src="/js/bootstrap.min.js"></script>          
   
</body>
</html>