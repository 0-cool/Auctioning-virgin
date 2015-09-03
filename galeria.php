<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Folio</title>
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
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>    
    <script type="text/javascript" src="js/touchTouch.jquery.js"></script> 
    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
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
   error_reporting(0);
    include('bd/conexion.php'); 
    session_start();
    if (isset($_SESSION['usuario'])) {
     ?>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                <ul class="nav sf-menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#subasta">Subasta</a></li>
                <li class="active"><a href="galeria.php">Galeria</a></li>
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
    <?php }

    else{
      ?>

<div class="spinner"></div>
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                 <ul class="nav sf-menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php#subasta">Subasta</a></li>
                <li class="active"><a href="galeria.php">Galeria</a></li>
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
    <?php } ?>
<div class="bg-content">       
  <!--============================== content =================================-->      
      <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span12">
        <h3>Gallery</h3>
         </article>
        <div class="clear"></div>
         <ul class="portfolio clearfix">           
          <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img1.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img2.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img3.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img4.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img5.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img6.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img7.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img8.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img9.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img10.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img11.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img12.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img13.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img14.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img15.jpg"></a></li> 
           <li class="box"><a href="img/image-blank.png" class="magnifier" ><img alt="" src="img/page3-img16.jpg"></a></li>                       
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
</body>
</html>