<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Secretaria - Educando </title>

        <!-- Bootstrap Core CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Font Awesome CSS -->
        <link href="../css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Custom CSS -->
        <link href="../css/animate.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/style.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>


        <!-- Template js -->
       

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    
    <body>
        
        <!-- Start Logo Section -->
        <section id="logo-section" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="logo text-center">
                            <br>
                            <img src="../images/educando.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <br>
                        <br>
                        <!-- Split button -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-default">David Céspedes Huamán</button>
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Editar Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Cerrar Sesión</a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                  <!--   <div class="col-md-3">
                        <div class="menu-item blue">
                            <a href="frmMatricula.php">
                                <i class="fa fa-graduation-cap"></i>
                                <p>Matrícula</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="frmPagos.php" >
                                <i class="fa fa-credit-card"></i>
                                <p>Pagos</p>
                            </a>
                        </div>

                       
                                <div class="menu-item color responsive">
                                    <a href="frmVistaDeudaAlumno.php" >
                                        <i class="fa fa-usd"></i>
                                        <p>Vista Deuda Alumno</p>
                                    </a>
                                </div>                   
                        
                    </div> -->
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="frmMatricula.php">
                                <i class="fa fa-graduation-cap"></i>
                                <p>Matrícula</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="frmPagos.php" >
                                <i class="fa fa-credit-card"></i>
                                <p>Pagos</p>
                            </a>
                        </div>

                        <div class="menu-item color ">
                            <a href="frmVistaDeudaAlumno.php" >
                                <i class="fa fa-usd"></i>
                                <p>Vista Deuda Alumno</p>
                            </a>
                        </div>                                           
                    </div>
                    <div class="col-md-6">
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="../images/about-03.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="../images/about-02.jpg" class="img-responsive" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="../images/about-01.jpg" class="img-responsive" alt="">
                                    </div>

                                </div>

                            </div>
                        </div>

                         <div class="row">
                         
                           <!--  <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="frmVistaDeudaAlumno.php" >
                                        <i class="fa fa-usd"></i>
                                        <p>Vista Deuda Alumno</p>
                                    </a>
                                </div>
                            </div> -->
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="menu-item blue">
                                    <a href="frmVentasArticulos.php" >
                                        <i class="fa fa-shopping-cart"></i>
                                        <p>Venta de Artículos</p>
                                    </a>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                   <!--  <div class="col-md-3"></div> -->
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="frmRegistroSuspensiones.php">
                                <i class="fa fa-frown-o"></i>
                                <p>Registro Suspensiones</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="frmRegistroComportamiento.php">
                                <i class="fa fa-exclamation-triangle"></i>
                                <p>Registro Comportamiento</p>
                            </a>
                        </div>

                        <div class="menu-item green">
                            <a href="frmRegistroAsistenciaPersonal.php">
                                <i class="fa fa-check"></i>
                                <p>Registro Asistencia Personal</p>
                            </a>
                        </div>                                           
                    </div>
                </div>                
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Creado por <a href="#" target="_blank">Codev</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start Feature Section -->
        
        <!-- End Feature Section -->
        
        
        
        <!-- Start Portfolio Section -->
        
        <!-- End Testimonial Section -->

        <script src="../js/jquery-2.1.1.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="../js/jquery.appear.js"></script>
        <script src="../js/contact_me.js"></script>
        <script src="../js/jqBootstrapValidation.js"></script>
        <script src="../js/modernizr.custom.js"></script>
        <script src="../js/script.js"></script>
        
    </body>
    
</html>