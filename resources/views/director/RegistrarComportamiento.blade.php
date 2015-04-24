<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Registrar Comportamiento</title>

	<!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/menu.css">

</head>
<body onload="parametro(1)">
	<nav>
	  <ul>
	    <li class='home'>
	      <a href='fmrMatricula.php'>
	        <i class='fa fa-graduation-cap'></i>
	      </a>
	    </li>
	    <li class='user'>
	      <a href='frmRegistroActividad.php'>
	        <i class='fa fa-pencil'></i>
	      </a>
	    </li>
	    <li class='heart'>
	      <a href='frmReporteAsistenciaPersonal.php'>
	        <i class='fa fa-bar-chart'></i>
	      </a>
	    </li>
	    <li class='contact'>
	      <a href='frmReporteAsistenciaAlumno.php'>
	        <i class='fa fa-area-chart'></i>
	      </a>
	    </li>
	    <li class='comportamiento'>
	      <a href='frmRegistrarComportamiento.php' id="menucolor">
	        <i class='fa fa-exclamation-triangle'></i>
	      </a>
	    </li>
	    <li class='personal'>
	      <a href='frmPermisosPersonal.php'>
	        <i class='fa fa-sign-out'></i>
	      </a>
	    </li>
	    <li class='alumno'>
	      <a href='frmPermisosAlumno.php'>
	        <i class='fa fa-sign-out'></i>
	      </a>
	    </li>
	    <li class='suspensiones'>
	      <a href='frmRegistrarSuspensiones.php'>
	        <i class='fa fa-frown-o'></i>
	      </a>
	    </li>
	  </ul>
	</nav>
	<div class="container">
		<h2>Registrar Comportamiento</h2>
		<br>
		<div class="col-lg-2"></div>
		<div class="col-lg-8">
			<label>Alumno:</label>
			<select class="form-control" name="txtalumno" id="txtalumno">
				<option>Elegir Alumno</option>
			</select><br>
			<label>Observación:</label>
			<textarea class="form-control" name="txtobservacion" id="txtobservacion">
				
			</textarea><br>
			<button class="btn btn-success btn-lg center-block">Guardar</button>
		</div>
		<div class="col-lg-2"></div>
	</div>	
	<!-- Template js -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/opciones.js"></script>
    
</body>
</html>