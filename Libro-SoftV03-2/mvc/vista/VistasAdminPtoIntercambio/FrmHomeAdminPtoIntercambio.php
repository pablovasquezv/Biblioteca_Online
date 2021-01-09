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
    <link rel='icon' href='../../../media/img/Logos/SoloLogo.ico' type='image/x-icon' sizes="16x16" />

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
                            <a href="../../controlador/ControladorInvitado/LogOutControlador.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar Sesión</button></a>
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
                <li class="active"><a class="nav-link active font-weight-bold" href="FrmHomeAdminPtoIntercambio.php">INICIO</a></li>
                <li class="active"><a class="nav-link" href="FrmAdminCuentaAdminPtoInter.php">Administrar Cuenta</a></li>           
            </ul>  
                    
        </nav><!-- FIN BARRA NAVEGACION -->
        

        <section>
            <div class="container">
                <!-- ACA VA EL CONTENIDO DE LAS PAGINAS!!! -->
                <h4 class="adminSistema">Punto de Intercambio: <?php echo $_SESSION['nombre_pto_intercambio']?> | <?php echo $_SESSION['nombre_ciudad']?> | <?php echo $_SESSION['direccion_pto_intercambio']?></h4>
                <hr>
                <h5 class="adminSistema">Secciones de Administración Punto Intercambio </h5>
                <hr>
                <div class="botones">
                    <div class="row">
                        <div class="col-sm">
                            <a href="VistasAdminPrestamoEC/FrmListadoPrestamosEC.php"><button class="btn btn-outline-primary btn-block shadow-lg" title="ADMINISTRE LOS PRESTAMOS EN CURSO">PRESTAMOS EN CURSO<img id="botonSecciones" src="../../../media/img/Tamaño Imagen Boton Transparente.png" class="img-fluid" alt="Responsive image" alt="450" width="300"></button></a>
                        </div>
                        <div class="col-sm">
                            <a href="VistasAdminPrestamoFin/FrmListadoPrestamosFin.php"><button class="btn btn-outline-primary btn-block shadow-lg">PRESTAMOS TERMINADOS<img id="botonSecciones" src="../../../media/img/Tamaño Imagen Boton Transparente.png" class="img-fluid" alt="Responsive image" alt="450" width="300"></button></a>
                        </div>
                        
                    </div>
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
    
    










    <!-- JavaScript -->
    <!-- jQuery primero Después Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src="/js/bootstrap.min.js"></script>          
   
</body>
</html>