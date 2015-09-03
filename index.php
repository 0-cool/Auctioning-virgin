<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    include('bd/conexion.php'); 
    error_reporting(0);
     ?>
	<head>
	<title>About</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	  
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>		
   function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();    }	
		 
     jQuery('.magnifier').touchTouch();			
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
  		  }); 
				
        // Countdow section javascript
        $(document).ready(function(){
            var currentDate, targetDate, timeDif;

          $.getJSON("time.php", function(data){
            currentDate = data.currentTime;
            targetDate = data.targetTime;
            init();
          });
          function init(){
            var Days, Hours, Minutes, Seconds;
            timeDif = targetDate - currentDate;
            function updateTime(){
              Seconds = timeDif;

              Days = Math.floor(Seconds/86400);
              Seconds -= Days * 86400;

              Hours = Math.floor(Seconds/3600);
              Seconds -= Hours * 3600;

              Minutes = Math.floor(Seconds/60);
              Seconds -= Minutes*60;

              Seconds = Math.floor(Seconds);
            }
            function tick(){
              clearTimeout(timer);
              updateTime();
              displayTime();

              if (timeDif > 0) {
                timeDif--;
                timer = setTimeout(tick, 1*1000);
              }
              else{
                $("#timer").html("Timer dome");
              }
            }
            function displayTime(){
              var out;
              out = "<ul style='padding-left:1%;padding-right:1%;'><li>" + Days+ " Dias </li><li> " + Hours + " Horas </li><li> " + Minutes + " Minutos </li><li> " + Seconds + " Segundos</li></ul> ";

                $("#timer").html(out);
            }
            var timer = setTimeout(tick, 1*1000);

          }
        });
	</script>

	<!--[if lt IE 8]>ic
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

    if (isset($_SESSION['usuario'])) {     
if ($_GET['login']=='cerrar') {
  session_unset('usuario');
  session_destroy();
  echo "<script>window.location='login/index.php?login=iniciar';</script>";
}
      ?>
<!-- ////////////////////////////Sesion iniciada///////////////////////////////////////// -->
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="#subasta">Subasta</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="index.php?login=cerrar">Cerrar</a></li>
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
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="" > </li>
            <li> <img src="img/slide-2.jpg" alt="" > </li>
            <li> <img src="img/slide-3.jpg" alt="" > </li>
            <li> <img src="img/slide-4.jpg" alt="" > </li>
            <li> <img src="img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome!</h2>
              <div>
            <p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a> for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra">
    <div class="row-1">
          <div class="container">
        <div class="row">
          
        <article class="span6">
              <h3>Shortly about me</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="img/page1-img5.jpg " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">Sed ut perspictis unde omnis natus error volupatem accusantium doloue laudantium, totam rem.</div>
                  Aperiam, eaque ipsa quae ab illo  veritatis et beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                  <div class="border-horiz"></div>
                  <div class="overflow">
                <ul class="list list-pad">
                      <li><a href="#">Campaigns</a></li>
                      <li><a href="#">Portraits</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Fine Art</a></li>
                    </ul>
                <ul class="list">
                      <li><a href="#">Advertising</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Love story</a></li>
                      <li><a href="#">Landscapes</a></li>
                    </ul>
              </div>
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Latest photoshoots</h3>
              <ul class="list-photo">
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img6.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img7.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img8.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img9.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img10.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img11.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img12.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img13.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img14.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img15.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img16.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img17.jpg " alt="" /></a></li>
          </ul>
            </article>
            </div>
          
      </div>
        </div>
    <div class="container">
          <div id="subasta" class="row">
          <div class="page-header">
            <h2>Subasta</h2>
          </div>
          <div class="span12">
          <div class="wrapper">
          <p>Fecha final: 25 de diciembre 2015. </p>
            <figure class="img-indent"><img src="img/page1-img5.jpg " alt="" /></figure>
            <div class="img-indent overflow extra" id="datosSuba">
                  <div class="txt-1">
                  Precio de la subasta actual: <br><br>
                  <font id="monto" color="red" size="10">
                    <?php
                    $sql = mysql_query('SELECT puja FROM puja ORDER BY id DESC LIMIT 1');
                    if($f=mysql_fetch_array($sql)){
                      $valorPuja = $f['puja'];
                   }

                     echo "US $ " . number_format($valorPuja) . ".00";
                    ?>
                  </font>
                  <br>
                  <?php
                    $sql = mysql_query('SELECT usuario FROM puja ORDER BY id DESC LIMIT 1');
                    if($f=mysql_fetch_array($sql)){
                     echo strtoupper($f['usuario']);
                   }
                    ?>
                  </div>
                  <div id="timer"></div>
                  <br>
                  <form action="index.php" method="POST">
                  <input type="hidden" id="valorPujaOculto" value="<?php echo $valorPuja;?>">
                    <input type="text" maxlength="7" id="valorPuja" name="valorPuja" class="form-control" onkeypress="return isNumberKey(event)" placeholder="US $"><br>
                    <div id="aumentarValor">
                    <span class="val1">100+</span>
                    <span class="val2">200+</span>
                    <span class="val3">300+</span>
                    </div>
                    <br>
                    <script>
                      $(document).ready(function(){
                        $('.val1').click(function(){
                          $('#valorPuja').val(parseInt($('#valorPujaOculto').val()) + 100 );
                        });
                        $('.val2').click(function(){
                          $('#valorPuja').val(parseInt($('#valorPujaOculto').val()) + 200 );
                        });
                        $('.val3').click(function(){
                          $('#valorPuja').val(parseInt($('#valorPujaOculto').val()) + 300 );
                        });
                      });
                    </script>
                  <?php 
                    if(isset($_POST['puja'])){
                      if ($_POST['valorPuja'] != "") {
                        if($_POST['valorPuja'] > $valorPuja ){
                        $sql = mysql_query('INSERT INTO puja (usuario,email,puja) VALUES ("'.$_SESSION["usuario"].'","'.$_SESSION["email"].'","'.$_POST['valorPuja'].'")');
                        if($sql){
                        echo "<script>alert('Tu puja ha sido enviada!'); window.location = 'index.php#subasta';</script>";
                        }
                        }
                        else{ 
                          echo "<br><font color='red' size='4' face='Monospace'>El valor tiene que ser mayor!</font> 
                        <script>window.location='index.php#subasta';</script>";
                     }
                      }
                      else{
                        echo "<br><font color='red' size='4' face='Monospace'>Debe de ingresar algun valor!</font> 
                        <script> window.location='index.php#subasta';</script>";
                      }
                    }
                   ?>
                  <div class="overflow" id="pujar">
                  <button name="puja">
                  <div><img src="img/subasta.png " alt="" /></div>
                  <div><span><h2>Pujar</h2></span></div>
                  </button>
              </div>
              </form>
                </div>
          </div>
          </div>
      </div>
        </div>
  </div><div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Fashion</h3>
                <img  src="img/page1-img1.jpg" alt="">
                <sec
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Nature</h3>
                <img  src="img/page1-img2.jpg" alt="">
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Love story</h3>
                <img  src="img/page1-img3.jpg" alt="">
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Fine art</h3>
                <img  src="img/page1-img4.jpg" alt="">
              </div>
                </li>
          </ul>
            </div>
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
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<?php
}
else{
?>
<!-- ////////////////////////////Sesion cerrada///////////////////////////////////////// -->
    <div class="spinner"></div> 
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li><a href="#subasta">Subasta</a></li>
               <li><a href="galeria.php">Galeria</a></li>
                <li><a href="login/index.php?login=iniciar">Login</a></li>
                <li><a href="login/index.php?login=registrar">Registro</a></li>
                <li><a href="contacto.php">Contacto</a></li>
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
          <div class="span12"> 
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/slide-1.jpg" alt="" > </li>
            <li> <img src="img/slide-2.jpg" alt="" > </li>
            <li> <img src="img/slide-3.jpg" alt="" > </li>
            <li> <img src="img/slide-4.jpg" alt="" > </li>
            <li> <img src="img/slide-5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome!</h2>
              <div>
            <p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a> for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
          </div>
            </div>
      </div>
        </div>
  </div>
      
      <!--============================== content =================================-->
      
      <div id="content" class="content-extra">
    <div class="row-1">
          <div class="container">
        <div class="row">
          
        <article class="span6">
              <h3>Shortly about me</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="img/page1-img5.jpg " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  <div class="txt-1">Sed ut perspictis unde omnis natus error volupatem accusantium doloue laudantium, totam rem.</div>
                  Aperiam, eaque ipsa quae ab illo  veritatis et beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
                  <div class="border-horiz"></div>
                  <div class="overflow">
                <ul class="list list-pad">
                      <li><a href="#">Campaigns</a></li>
                      <li><a href="#">Portraits</a></li>
                      <li><a href="#">Fashion</a></li>
                      <li><a href="#">Fine Art</a></li>
                    </ul>
                <ul class="list">
                      <li><a href="#">Advertising</a></li>
                      <li><a href="#">Lifestyle</a></li>
                      <li><a href="#">Love story</a></li>
                      <li><a href="#">Landscapes</a></li>
                    </ul>
              </div>
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Latest photoshoots</h3>
              <ul class="list-photo">
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img6.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img7.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img8.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img9.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img10.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img11.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img12.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img13.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img14.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img15.jpg " alt="" /></a></li>
            <li><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img16.jpg " alt="" /></a></li>
            <li class="last"><a href="img/image-blank.png" class="magnifier" ><img src="img/page1-img17.jpg " alt="" /></a></li>
          </ul>
            </article>
            </div>
          
      </div>
        </div>
    <div class="container">
          <div id="subasta" class="row">
          <div class="page-header">
            <h2>Subasta</h2>
          </div>
          <div class="span12">
          <div class="wrapper">
            <figure class="img-indent"><img src="img/page1-img5.jpg " alt="" /></figure>
            <div class="img-indent overflow extra" id="datosSuba">
                  <div class="txt-1">
                  Precio de la subasta actual: <br><br>
                  <font id="monto" color="red" size="10">
                    <?php
                    $sql = mysql_query('SELECT puja FROM puja ORDER BY id DESC LIMIT 1');
                    if($f=mysql_fetch_array($sql)){
                     echo "US $ " . number_format($f['puja']) . ".00";
                   }
                    ?>
                  </font>
                  <br>
                   <?php
                    $sql = mysql_query('SELECT usuario FROM puja ORDER BY id DESC LIMIT 1');
                    if($f=mysql_fetch_array($sql)){
                     echo strtoupper($f['usuario']);
                   }
                    ?>
                  </div>
                  <div id="timer"></div>
                  <div class="overflow" id="pujar">
                  <br>
                  <a href="login/index.php?login=iniciar">
                  <button>
                  <div><img src="img/subasta.png " alt="" /></div>
                  <div><span><h2>Pujar</h2></span></div>
                  </button>
                  </a>
              </div>
                </div>
          </div>
          </div>
      </div>
        </div>
  </div><div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Fashion</h3>
                <img  src="img/page1-img1.jpg" alt="">
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Nature</h3>
                <img  src="img/page1-img2.jpg" alt="">
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3>Love story</h3>
                <img  src="img/page1-img3.jpg" alt="">
              </div>
                </li>
            <li class="span3">
                  <div class="thumbnail thumbnail-1">
                <h3 class="title-1 extra">Fine art</h3>
                <img  src="img/page1-img4.jpg" alt="">
              </div>
                </li>
          </ul>
            </div>
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
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<?php
}
?>
</body>
</html>