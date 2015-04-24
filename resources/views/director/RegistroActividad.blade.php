<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Registro Actividad</title>

	<!-- Bootstrap Core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <link href="../css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css">
    <link href="../css/timepicki.css" rel="stylesheet">

</head>
<body onload="parametro(1);">
	<nav>
	  <ul>
	    <li class='home'>
	      <a href='fmrMatricula.php'>
	        <i class='fa fa-graduation-cap'></i>
	      </a>
	    </li>
	    <li class='user'>
	      <a href='frmRegistroActividad.php' id="menucolor">
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
	      <a href='frmRegistrarComportamiento.php'>
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
		<h2>Registro Actividad</h2>
		<br>
		<div class="col-lg-2"></div>
		<div class="col-lg-4">
			<label>Nombre de Actividad:</label>
			<input type="text" class="form-control" name="txtnombreactividad" id="txtnombreactividad"><br>
			<label>Motivo de Actividad:</label>
			<textarea class="form-control" name="txtmotivo" id="txtmotivo"></textarea><br>
			<label>Tipo de Actividad:</label>
			<select class="form-control" name="txttipoactividad" id="txttipoactividad">
				<option>Elegir Actividad</option>
			</select><br>
			<label>Aula:</label>
			<select class="form-control" name="txtaula" id="txtaula">
				<option>Elegir Aula</option>
			</select><br>
			<label>Grado:</label>
			<select class="form-control" name="txtgrado" id="txtgrado">
				<option>Elegir Grado</option>
			</select><br>
		</div>
		<div class="col-lg-4">
			<label>Responsable de Actividad:</label>
			<select class="form-control" name="txtresponsable" id="txtresponsable">
				<option>Elegir Responsable</option>
			</select><br>
			<label>Fecha de Inicio:</label>
			<input type="text" class="form-control" name="txtfechainicio" id="txtfechainicio"><br><br>
			<label>Fecha Fin:</label>
			<input type="text" class="form-control" name="txtfechafin" id="txtfechafin"><br>
			<label>Hora de Inicio:</label>
			<input type="text" class="form-control" name="txthorainicio" id="txthorainicio"><br>
			<label>Hora Fin:</label>
			<input type="text" class="form-control" name="txthorafin" id="txthorafin"><br>
		</div>
		<div class="col-lg-2"></div>
	</div>	
	<button class="btn btn-success center-block" onclick="enviar()">Guardar Actividad</button>
	<!-- Template js -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <script src="../js/timepicki.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/opciones.js"></script>

    <script type="text/javascript">
    	$(document).ready(function(){
    		$("#txtfechainicio").datepicker({dateFormat:'yy-mm-dd'});
    		$("#txtfechafin").datepicker({dateFormat:'yy-mm-dd'});
    		$("#txthorainicio").timepicki();
    		$("#txthorafin").timepicki();
    		
    	})
    </script>
    
</body>
</html>