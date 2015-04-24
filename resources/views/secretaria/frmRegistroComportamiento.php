<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Registro de Comportamiento</title>

	<!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/secretaria.css">


</head>
<body onload="parametro(1);">
	<nav>
	  <ul>
	    <li class='home'>
	      <a href='frmMatricula.php' >
	        <i class='fa fa-graduation-cap'></i>
	      </a>
	    </li>
	    <li class='pagos'>
	      <a href='frmPagos.php'>
	        <i class='fa fa-credit-card'></i>
	      </a>
	    </li>
	    <li class='deuda'>
	      <a href='frmVistaDeudaAlumno.php'>
	        <i class='fa fa-usd'></i>
	      </a>
	    </li>
	    <li class='venta'>
	      <a href='frmVentasArticulos.php'>
	        <i class='fa fa-shopping-cart'></i>
	      </a>
	    </li>
	    <li class='suspensiones'>
	      <a href='frmRegistroSuspensiones.php'>
	        <i class='fa fa-frown-o'></i>
	      </a>
	    </li>
	    <li class='comportamiento'>
	      <a href='frmRegistroComportamiento.php' id="menucolor">
	        <i class='fa fa-exclamation-triangle'></i>
	      </a>
	    </li>
	    <li class='asistencia'>
	      <a href='frmRegistroAsistenciaPersonal.php'>
	        <i class='fa fa-check'></i>
	      </a>
	    </li>
	 
	  </ul>
	</nav>
	<div class="container">
		<h2>Registro Comportamiento</h2>
		<form>
				
		</form>	
	</div>	
	<!-- Template js -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/opciones.js"></script>
    
</body>
</html>