<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Matricula</title>

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

     <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
      <link href="{{ asset('css/menu.css') }}" rel="stylesheet" media="screen">
       <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" media="screen">

</head>
<body onload="parametro(1);">
	<nav>
	  <ul>
	    <li class='home'>
	      <a href='fmrMatricula.php' id="menucolor">
	        <i class='fa fa-graduation-cap'></i>
	      </a>
	    </li>
	    <li class='user'>
	      <a href='frmRegistroActividad.php'>
	        <i class='fa fa-pencil'></i>
	      </a>
	    </li>
	    <li class='heart'>
	      <a href='reporteasistenciapersonal'>
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
		<h2>Matrícula</h2>
		<ul class="nav nav-tabs nav-justified">
			<li class="active" id="d1"><a onclick="verDatos(1)" href="#">Registro Alumno</a></li>
			<li id="d2"><a onclick="verDatos(3)" href="#">Registro Apoderado</a></li>
			<li id="d3"><a onclick="verDatos(6)" href="#">Matrícula</a></li>
		</ul>
		<br>
		{!!  Form::open(array("","id"=>"frmMatricula")) !!}
		<div id="datos1">
			<!-- form  Estas seguro que aquí debe abrirse el form?-->
			<input type="text" class="form-control" placeholder="Buscar Alumno..." id="txtbuscaralumno" name="txtbuscaralumno">
			<br>
			<label class="form-control label-info">Datos Personales</label>
			<div class="containermatricula">
				<br>
				<label>Tipo Documento:</label>
				<select class="form-control" id="cmbtipodocumentoalu" name="cmbtipodocumentoalu" onchange="validardocumentoalumno(this.value)">
					<option value="1">DNI</option>
					<option value="2">Pasaporte</option>
				</select>
				<label>Nº Documento:</label>
				<input type="text" class="form-control" id="txtnumerodocumentoalu" name="txtnumerodocumentoalu" maxlength="8">
				<label>Nombres:</label>
				<input type="text" class="form-control" id="txtnombresalu" name="txtnombresalu">
				<label>Apellidos:</label>
				<input type="text" class="form-control" id="txtapellidos" name="txtapellidosalu">
				<label>Fecha Nacimiento:</label>
				<input type="text" class="form-control" id="txtfechanacimiento" name="txtfechanacimientoalu">
				<label>Sexo:</label>
				<select class="form-control" id="cmbsexo" name="cmbsexoalu">
					<option value="1">Masculino</option>
					<option value="2">Femenino</option>
				</select>
				<br>
				<ul class="pager">
					<li class="next"><a onclick="verDatos(2)">Siguiente &rarr;</a></li>
				</ul>
			</div>
		</div>
		<div id="datos2">
			<br>
			<label class="form-control label-info">Datos Generales</label>
			<div class="containermatricula">
				<br>
				<label>Nacionalidad:</label>
				<select class="form-control" name="cmbnacionalidadalumno">
					<option value="1">Perú</option>
					<option value="2">Brasil</option>
				</select>
				<label>Dirección:</label>
				<input type="text" class="form-control" id="txtdireccion" name="txtdireccionalu">
				<label>Teléfono 1:</label>
				<input type="text" class="form-control" id="txttelefono1" name="txttelefono1alu">
				<label>Teléfono 2:</label>
				<input type="text" class="form-control" id="txttelefono2" name="txttelefono2alu">				
				<label>Email:</label>
				<input type="email" class="form-control" id="txtemail" name="txtemailalu">
				<label>Password:</label>
				<input type="password" class="form-control" id="txtpass" name="txtpassalu">
				<br>
				<ul class="pager">
				    <li class="previous"><a onclick="verDatos(8)">&larr; Anterior</a></li>
				</ul>
				<button type="button" class="btn btn-success btn-lg center-block" onclick="verDatos(3)">Finalizar</button>
				<br>
			</div>
			<br>
		</div>
		<div id="datos3">
			<input type="text" class="form-control" placeholder="Buscar Apoderado...">
			<br>
			<label class="form-control label-info">Datos Personales</label>
			<div class="containermatricula">
				<br>
				<label>Tipo Documento:</label>
				<select class="form-control" name="cmbtipodocumentoapoderado" onchange="validardocumentoapoderado(this.value)">
					<option value="1">DNI</option>
					<option value="2">Pasaporte</option>
				</select>
				<label>Nº Documento:</label>
				<input type="text" class="form-control" id="txtnumerodocumentoapoderado" name="txtnumerodocumentoapoderado" >
				<label>Nombres:</label>
				<input type="text" class="form-control" id="txtnombresapoderado" name="txtnombresapoderado">
				<label>Apellidos:</label>
				<input type="text" class="form-control" id="txtapellidosapoderado" name="txtapellidosapoderado" >
				<label>Fecha Nacimiento:</label>
				<input type="text" class="form-control" id="txtfechanacimientoapoderado" name="txtfechanacimientoapoderado">
				<label>Sexo:</label>
				<select class="form-control" id="cmbsexoapoderado" name="cmbsexoapoderado">
					<option value="1">Masculino</option>
					<option value="2">Femenino</option>
				</select>
				<br>
				<ul class="pager">
				    <li class="previous"><a onclick="verDatos(12)">&larr; Anterior</a></li>
					<li class="next"><a onclick="verDatos(4)">Siguiente &rarr;</a></li>
				</ul>
			</div>
		</div>
		<div id="datos4">
			<br>
			<label class="form-control label-info">Datos Generales</label>
			<div class="containermatricula">
			 	<br>
				<label>Nacionalidad:</label>
				<select class="form-control" name="cmbnacionalidadapoderado">
					<option value="1">Perú</option>
					<option value="2">Brasil</option>
				</select>
				<label>Dirección:</label>
				<input type="text" class="form-control" name="txtdireccionapo">
				<label>Teléfono 1:</label>
				<input type="text" class="form-control" name="txttelefono1apo">
				<label>Teléfono 2:</label>
				<input type="text" class="form-control" name="txttelefono2apo">				
				<label>Email:</label>
				<input type="email" class="form-control" name="txtemailapo">
				<label>Password:</label>
				<input type="password" class="form-control" name="txtpassapo">
				<br>
				<ul class="pager">
			        <li class="previous"><a onclick="verDatos(9)">&larr; Anterior</a></li>
					<li class="next"><a onclick="verDatos(5)">Siguiente &rarr;</a></li>
				</ul>
			</div>
			<br>
		</div>
		<div id="datos5">
			<br>
			<label class="form-control label-info">Datos Laborales</label>
			<div class="containermatricula">
			    <br>
			    <label>Estado Civil:</label>
				<select class="form-control" name="txtestadocivilapo">
					<option value="1">Casado</option>
					<option value="2">Soltero</option>
				</select>
				<label>Ocupación:</label>
				<select class="form-control" name="txtocupacionapo">
					<option value="1">Ingeniero</option>
					<option value="2">Arquitecto</option>
				</select>
				<label>Centro de Trabajo:</label>
				<input type="text" class="form-control" name="txtcentrotrabajoapo">
				<br>
			    <ul class="pager">
			        <li class="previous"><a onclick="verDatos(10)">&larr; Anterior</a></li>
			    </ul>
				<button type="button" class="btn btn-success btn-lg center-block" onclick="verDatos(6)">Finalizar</button> 
			    <br>
			    <br>
			</div>
			<br>
		</div>
		<div id="datos6">
			<br>
			<label class="form-control label-info">Datos Generales</label>
			<br>
			<div class="containermatricula">
				<br>
				<label>Turno:</label>
				<select class="form-control" name="txtturno">
					<option value="1">Mañana</option>
					<option value="2">Tarde</option>
				</select>
				<label>Grado:</label>
				<select class="form-control" name="txtgrado">
					<option value="1">1ero</option>
					<option value="2">2do</option>
				</select>
				<label>Aula:</label>
				<select class="form-control" name="txtaula">
					<option value="1">A</option>
					<option value="2">B</option>
				</select>
				<br>
			    <ul class="pager">
			        <li class="previous"><a onclick="verDatos(11)">&larr; Anterior</a></li>
			    </ul>
				<button type="button" class="btn btn-success btn-lg center-block" onclick='enviar()' >Guardar Registro</button>
			    <br>
			   	<br>
			</div>
			<br>
		</div> 
		  {!! Form::close() !!}     
	</div>	
	<!-- Template js -->
	    <script src="js/jquery-2.1.1.min.js"></script>
    
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/opciones.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/numeric.js"></script>
    <script type="text/javascript">

    	$(document).ready(function(){
    		$("#datos1").show();
            $("#datos2").hide();
            $("#datos3").hide();
            $("#datos4").hide();
            $("#datos5").hide();
            $("#datos6").hide();
            $("#txtfechanacimiento").datepicker({ changeMonth: true,
      changeYear: true, dateFormat:'yy-mm-dd'});
            $("#txtfechanacimientoapoderado").datepicker({ changeMonth: true,
      changeYear: true, dateFormat:'yy-mm-dd'});
            $("#txtnumerodocumentoalu").numeric();

            listarCursos();
            listarGrado();
            listarEstadoCivil();
            listarOcupacion();
            $("#txtbuscaralumno").autocomplete({
            source: "matriculas/buscaralumno", //el archivo que realiza la busqueda
            minLength: 2, //le decimos que tenga al menos 2 caracteres para ejecutrar la busqueda
            select: f_seleccionar_registro, //funcion que se ejecuta cuando el usuario selecciona un registro
            focus: f_marcar_registro
        })
    	});
    	 function f_seleccionar_registro(event, ui){
        	 event.preventDefault();
            alert("aaa");
            
           
        }
        
        function f_marcar_registro(event, ui){
        	 event.preventDefault();
           alert("eee");
        }
    	function verDatos(parametro){
            if(parametro==1){
                $("#datos1").show();
                $("#datos2").hide();
                $("#datos3").hide();
                $("#datos4").hide();
                $("#datos5").hide();
                $("#datos6").hide();
                $("#d1").attr("class","active");
                $("#d2").attr("class","");
                $("#d3").attr("class","");
            }
            else if(parametro==2){
                $("#datos1").hide();
                $("#datos2").show();
            }else if(parametro==3){
                $("#datos1").hide();
                $("#datos2").hide();
                $("#datos3").show();
                $("#datos4").hide();
                $("#datos5").hide();
                $("#datos6").hide();
                $("#d1").attr("class","");
                $("#d2").attr("class","active");
                $("#d3").attr("class","");
            }else if(parametro==4){
                $("#datos3").hide();
                $("#datos4").show();
            }else if(parametro==5){
                $("#datos4").hide();
                $("#datos5").show();
            }else if(parametro==6){
                $("#datos1").hide();
                $("#datos2").hide();
                $("#datos3").hide();
                $("#datos4").hide();
                $("#datos5").hide();
                $("#datos6").show();
                $("#d1").attr("class","");
                $("#d2").attr("class","");
                $("#d3").attr("class","active");
            }else if(parametro==8){
                $("#datos2").hide();
                $("#datos1").show();
            }else if(parametro==9){
                $("#datos4").hide();
                $("#datos3").show();
            }else if(parametro==10){
                $("#datos5").hide();
                $("#datos4").show();
            }else if(parametro==11){
                $("#datos6").hide();
                $("#datos5").show();
                $("#d2").attr("class","active");
                $("#d3").attr("class","");
            }else if(parametro==12){
                $("#datos3").hide();
                $("#datos2").show();
                $("#d1").attr("class","active");
                $("#d2").attr("class","");
            }
        }

        function validardocumentoalumno(tipo){
        	$("#txtnumerodocumentoalu").val("");
        	if(tipo==1){

        		$("#txtnumerodocumentoalu").attr("maxlength","8");
        	}else{
        		$("#txtnumerodocumentoalu").attr("maxlength","11");
        	}
        	
        }
   
    	function enviar(){
    		$.ajax({
                url: "matriculas/registrar",
                type: "get",
                dataType: "json",
                data:$("#frmMatricula").serialize() ,

                success: function(DataJson){
                    if(DataJson.state){
                        for(data in DataJson.resultado){
                               
                                //alert(DataJson.resultado[data].nombre_alumno);
                        }  
                   	}else{
                           
                    }                      
                                                      
                }
            }); 
    	}

    	function listarCursos(){
    		$.ajax({
                url: "matriculas/listarcursos",
                type: "get",
                dataType: "json",
                success: function(DataJson){
                    if(DataJson.state){
                        for(data in DataJson.resultado){
                              // alert(DataJson.resultado[data].nombre_curso);
                                //alert(DataJson.resultado[data].nombre_alumno);
                        }  
                   	}else{
                           
                    }                      
                                                      
                }
            }); 
    	}

    	function listarGrado(){
    		$.ajax({
                url: "matriculas/listargrados",
                type: "get",
                dataType: "json",
                success: function(DataJson){
                    if(DataJson.state){
                        for(data in DataJson.resultado){
                              // alert(DataJson.resultado[data].nombre_grado);
                                //alert(DataJson.resultado[data].nombre_alumno);
                        }  
                   	}else{
                           
                    }                      
                                                      
                }
            }); 
    	}

    	function listarEstadoCivil(){
    		$.ajax({
                url: "matriculas/listarestadocivil",
                type: "get",
                dataType: "json",
                success: function(DataJson){
                    if(DataJson.state){
                        for(data in DataJson.resultado){
                            //  alert(DataJson.resultado[data].descripcion);
                                //alert(DataJson.resultado[data].nombre_alumno);
                        }  
                   	}else{
                           
                    }                      
                                                      
                }
            }); 
    	}
    	function listarOcupacion(){
    		$.ajax({
                url: "matriculas/listarocupacion",
                type: "get",
                dataType: "json",
                success: function(DataJson){
                    if(DataJson.state){
                        for(data in DataJson.resultado){
                             //  alert(DataJson.resultado[data].descripcion);
                                //alert(DataJson.resultado[data].nombre_alumno);
                        }  
                   	}else{
                           
                    }                      
                                                      
                }
            }); 
    	}
    </script>
</body>
</html>