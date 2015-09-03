<!--Formulario de registro-->
<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
include('../bd/conexion.php')
?>
	<head>
	<title>About</title>
	<meta charset="utf-8">
	<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="../css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/superfish.js"></script>
	<script type="text/javascript" src="../js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="../js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='../js/jquery.preloader.js'></"+"script>");}	</script>
	<SCRIPT language=Javascript>
      <!--
      function validarCampo1(form)
	{     
	if (form.clave.value.length <8){ 
	alert('Su contraseña es demaciado debil debe introducir una contraseña mayor a 8 digitos');      
	form.palabra1.focus(); 
	return true;    
	}
	} 
var numeros="0123456789";
var letras="abcdefghyjklmnñopqrstuvwxyz";
var letras_mayusculas="ABCDEFGHYJKLMNÑOPQRSTUVWXYZ";

function tiene_numeros(texto){
   for(i=0; i<texto.length; i++){
      if (numeros.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
} 

function tiene_letras(texto){
   texto = texto.toLowerCase();
   for(i=0; i<texto.length; i++){
      if (letras.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
} 

function tiene_minusculas(texto){
   for(i=0; i<texto.length; i++){
      if (letras.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
} 

function tiene_mayusculas(texto){
   for(i=0; i<texto.length; i++){
      if (letras_mayusculas.indexOf(texto.charAt(i),0)!=-1){
         return 1;
      }
   }
   return 0;
} 

function seguridad_clave(clave){
	var seguridad = 0;
	if (clave.length!=0){
		if (tiene_numeros(clave) && tiene_letras(clave)){
			seguridad += 20;
		}
		if (tiene_minusculas(clave) && tiene_mayusculas(clave)){
			seguridad += 30;
		}
		if (clave.length >= 4 && clave.length <= 5){
			seguridad += 30;
		}
		if (clave.length >= 6 && clave.length <= 8){
				seguridad += 30;
			}
		if (clave.length > 8 && clave.length <= 12){
					seguridad += 10;
				}
		if(clave.length > 12){
					seguridad += 10;
				}
		
		
	}
	return seguridad				
}	

function muestra_seguridad_clave(clave,formulario){
	seguridad=seguridad_clave(clave);
	formulario.seguridad.value="Asegurado en un " + seguridad + "%";
}

function validar(obj){
	var d = document.formulario;
	if(obj.checked==true){
		d.enviar.disabled = false;
	}else{
		d.enviar.disabled= true;
	}
}
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
      //-->
   </SCRIPT>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
        <?php
session_start();
if ($_GET['login']=='iniciar') {


?>		
<div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="../img/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                   <ul class="nav sf-menu">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../index.php#subasta">Subasta</a></li>
                <li><a href="../galeria.php">Galeria</a></li>
                <li  class="active"><a href="index.php?login=iniciar">Login</a></li>
                <li><a href="index.php?login=registrar">Registro</a></li>
                <li><a href="../contacto.php">Contacto</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
<div class="container">
          <div class="row">
        <article class="span12">

        <br>
       	<div class="page-header">
	<h2>Iniciar sesion</h2>
</div>
				<form id="formRegistro" action="index.php?login=iniciar" method="POST">
					<div class="form-group">
					    <label for="InputUsuario">Usuario o Email</label>
					  	<div class="input-group">
						  	<span class="input-group-addon">
						  		<span class="glyphicon glyphicon-user"></span>
						  	</span>
						    <input type="text" class="form-control" name="sesion_usuario" id="InputW" placeholder="Ingrese su usuario">
						</div>
					    <label for="" id="LoginUsuario"></label>
					</div>
					<div class="form-group">
					    <label for="InputClave">Contraseña</label>
					    <div class="input-group">
						  	<span class="input-group-addon">
						  		<span class="glyphicon glyphicon-asterisk"></span>
						  	</span>
						    <input type="password" class="form-control" name="sesion_clave" id="InputW" placeholder="Ingrese su Contraseña">
					    </div>
					    <label for="" id="LoginClave"></label>
			  		</div>
			  		<button type="submit" name="sesion" class="btn btn-warning">Iniciar Sesion</button> &nbsp;&nbsp;&nbsp;&nbsp;
			  <a href="index.php?login=registrar">Registrate ahora!</a>
			
			  </form>

<?php
$usuario = $_POST["sesion_usuario"];
$password = $_POST["sesion_clave"];
if (isset($_POST['sesion'])) {
	if($usuario!= "" && $password!= "")
	{
		$sql = mysql_query('SELECT * FROM login WHERE usuario="'.$usuario.'" OR email="'.$usuario.'" ');
		if($f= mysql_fetch_array($sql)){
			if($f["clave"] == $password){
				$_SESSION["usuario"] = $f['usuario'];
				$_SESSION["id"] = $f['id'];
				$_SESSION["email"]=$f['email'];
				session_start();
				
				echo '<script>window.location="../index.php#subasta";</script>';
				
			}else{
				echo '<p style="color:red;font-size:1.5em;text-shadow:1px 1px 1px white;">Contraseña incorrecta!</p>';
					
			}
		}else{
			echo '<p style="color:red;font-size:1.5em;text-shadow:1px 1px 1px white;">El usuario o email que intenta ingresar no existe!</p>';
		}
		
	}
	else{
		echo '<p style="color:red;font-size:1.5em;text-shadow:1px 1px 1px white;">Ha dejado campos vacios!</p>';
	}
}

?>
            </article>
      </div>
        </div>
  </div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">All right reserved</div>
    </footer>
<script type="text/javascript" src="../js/bootstrap.js"></script>
<?php 
}
elseif($_GET['login']=='registrar'){

	 ?>

    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="../img/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                   <ul class="nav sf-menu">
                <li><a href="../index.php">Inicio</a></li>
                <li><a href="../index.php#subasta">Subasta</a></li>
                <li><a href="../galeria.php">Galeria</a></li>
                <li><a href="index.php?login=iniciar">Login</a></li>
                <li class="active"><a href="index.php?login=registrar">Registro</a></li>
                <li><a href="../contacto.php">Contacto</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">
<div class="container">
          <div class="row">
        <article class="span12">
        <br>
		<div class="page-header">
	<h2>Registrate</h2>
</div>
			<form id="formRegistro" action="index.php?login=registrar" method="POST">
			  <div class="form-group">
			    <label for="InputUsuario">Nombre de usuario</label>
			  	<div class="input-group">
			  	<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
			    <input type="text" class="form-control" name="usuario" id="InputW" placeholder="Ingrese su usuario">
			    </div>
			    <label for="" id="AlertaUsuario"></label>
			  </div>
			  <div class="form-group">
			    <label for="InputEmail">E-mail</label>
			    <div class="input-group">
			    <input type="email" class="form-control" name="email" id="InputW" placeholder="Ingrese su E-mail">
			  </div>
			  <label for="" id="AlertaEmail"></label>
			  </div>
			  <div class="form-group">
			    <label for="InputEmail2">Confirmar E-mail</label>
			    <div class="input-group">
			    <input type="email" class="form-control" name="email2" id="InputW" placeholder="Repita su E-mail">
			  </div>
			  <label for="" id="AlertaEmail2"></label>
			  </div>
			  <div class="form-group">
			    <label for="InputEmail2">Ingresa tu contraseña</label>
			    <div class="input-group">
			    <input type="password" class="form-control" onkeyup="muestra_seguridad_clave(this.value, this.form)" name="clave" id="InputW" placeholder="Ingrese su contraseña">
			  <i>Seguridad: &nbsp; &nbsp; </i><input name="seguridad" type="text" style="color:white;border: 0px; background-color:#e85356;" onfocus="blur()">
			  </div>
			  <label for="" id="AlertaEmail2"></label>
			  </div>
			  <div class="form-group">
			    <label for="InputEmail2">Tarjeta de identidad o Pasaporte</label>
			    <div class="input-group">
			    <input type="text" maxlength="11" onkeypress="return isNumberKey(event)" class="form-control" name="idPass" id="InputW" placeholder="Tarjeta de identidad o Pasaporte">
			  </div>
			  <label for="" id="AlertaEmail2"></label>
			  </div>
			  <div class="form-group">
			    <label for="InputPais">País</label>
			    <div class="input-group">
			  	<span class="input-group-addon"><span class="glyphicon glyphicon-plane"></span></span>
			    <select class="form-control" id="InputW" name="pais">
					<option value="">Seleccione su país</option>
					<option value="Afganistan">Afghanistan</option>
					<option value="Albania">Albania</option>
					<option value="Algeria">Algeria</option>
					<option value="American Samoa">American Samoa</option>
					<option value="Andorra">Andorra</option>
					<option value="Angola">Angola</option>
					<option value="Anguilla">Anguilla</option>
					</select>
					  </div>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name="condiciones"> Acepta los <a href="#">términos y condiciones</a> de la web.
			    </label>
			  </div>
			  <button type="submit" name="registrar" class="btn btn-warning">Registrate</button>
			  &nbsp;&nbsp;&nbsp;&nbsp;
			  <a href="index.php?login=iniciar">Ya tienes una cuenta?</a>
			</form>
			<!--Validando e insertando formulario de registro a la Base de datos-->
			<?php 
				$usuario = $_POST['usuario'];
				$email = $_POST['email'];
				$email2 = $_POST['email2'];
				$pais = $_POST['pais'];
				$idPass = $_POST['idPass'];
				$condiciones = $_POST['condiciones'];
				$clave =$_POST['clave'];
				$nuevo_email=mysql_query("select email from login where email='$email'"); 
				$nuevo_usuario=mysql_query("select usuario from login where usuario='$usuario'"); 

				if (isset($_POST['registrar'])) {
					if ($usuario != "" and $email != "" and $email2 != "") {
							if ($email == $email2) {
								if ($condiciones == true) {
									if (mysql_num_rows($nuevo_usuario) > 0) {
										echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">El usuario que trata de ingresar, ya esta registrado!</p>
											  </div>';
									}
									else{
										if (mysql_num_rows($nuevo_email) > 0) {
											echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">El email que trata de ingresar, ya esta registrado!</p>
											  </div>';
										}
										else{

											if(strlen($idPass) != 11){
												echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">Tu tarjeta de identidad o pasaporte esta incompleto!</p>
											  	</div>';
											}else{
											mysql_query('INSERT INTO login (usuario,clave,email,pais,identidad) VALUES ("'.$usuario.'","'.$clave.'",
											"'.$email.'","'.$pais.'","'.$idPass.'")');
												echo "<script>location.href='index.php?login=iniciar';</script>";														  
											}
										}
									}
								}
								else{
									echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">No aceptados nuestros términos y condiciones!</p>
											  </div>';
								}
							}
							else{
								echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">Los E-mails no son iguales!</p>
											  </div>';
							}
					}
					else{
							echo '<div id="errorRegistro">
												<p style="color:red;font-size:1.2em;text-shadow:1px 1px 1px white;">Existen campos que todavia estan vacios, favor de llenarlos!</p>
											  </div>';
					}

					}	
			?>
            </article>
      </div>
        </div>
  </div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">All right reserved</div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
	 <?php } 
	 else{
	 	echo "<script>window.location='../index.php';</script>";
	 };

	 ?>
</body>
</html>

