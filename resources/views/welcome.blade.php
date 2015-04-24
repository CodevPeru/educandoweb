<!DOCTYPE HTML>
<html class="lockscreen">
<head>
	<meta charset="utf-8">
	<title>Educando</title>
      <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
        <link href="{{ asset('css/admin.css') }}" rel="stylesheet" media="screen">
	
	  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="screen">
   
	
</head>
<body>
	<div class="center">
		<br>
		<div id="time">
		</div>
		<img src="images/educando.png" id="imagenedu">
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="lockscreen-name">Iniciar Sesión</div>
            
            <!-- START LOCK SCREEN ITEM -->
            <div class="lockscreen-item">
                <!-- lockscreen image -->
                <div class="lockscreen-image">
                    <img src="images/avatar5.png" alt="user image"/>
                </div>
                <!-- /.lockscreen-image -->

                <!-- lockscreen credentials (contains the form) -->
                <div class="lockscreen-credentials">   
                     {!!  Form::open(array("","id"=>"frmlogueo")) !!}
                    <div class="input-group">
                      
                        <input type="email" class="form-control" name="txtemail" id="txtemail" placeholder="Email" required />
                        <input type="password" class="form-control" name="txtcontra" id="txtcontra" placeholder="Password" required />
                        <div class="input-group-btn">
                            <button class="btn btn-flat"><i class="fa fa-arrow-right text-muted"></i></button>
                        </div>
                    </div>
                   {!! Form::close() !!}
                </div><!-- /.lockscreen credentials -->

            </div><!-- /.lockscreen-item -->

                       
	</div>
 <script src="js/jquery-2.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript">
		$(function() {
                startTime();

                 jQuery('#frmlogueo').submit(function(e) {
                var txttipo = document.getElementById("cbotipo").value;
                      e.preventDefault();

                            $.ajax({
                        url: "logueo/tipo",
                        type: "get",
                        dataType: "json",
                        data:$("#frmlogueo").serialize() ,

                        success: function(DataJson){
                          if(DataJson.state){
                            for(data in DataJson.resultado){
                                if(txttipo==1){
                                    //alert("ALUMNO");
                                    location.href="aulaalumno";
                                }else if(txttipo==2){
                                   // alert("DOCENTE");
                                    location.href="aulapersonal";
                                }
                                else if(txttipo ==3){
                                    location.href="super";
                                }
                                //alert(DataJson.resultado[data].nombre_alumno);
                            }  
                          }else{
                            alert("No tiene acceso");
                          }                      
                                                      
                        }
                    });                  
                                
             })


            });

            /*  */
            function startTime()
            {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();

                // add a zero in front of numbers<10
                m = checkTime(m);
                s = checkTime(s);

                //Check for PM and AM
                var day_or_night = (h > 11) ? "PM" : "AM";

                //Convert to 12 hours system
                if (h > 12)
                    h -= 12;

                //Add time to the headline and update every 500 milliseconds
                $('#time').html(h + ":" + m + ":" + s + " " + day_or_night);
                setTimeout(function() {
                    startTime()
                }, 1000);
            }

            function checkTime(i)
            {
                if (i < 10)
                {
                    i = "0" + i;
                }
                return i;
            }
	</script>
</body>
</html>