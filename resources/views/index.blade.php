<html lang="{{ app()->getLocale() }}">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Rodrigo Amora</title>

	<!-- Favicons -->
	<link rel="shortcut icon" href="img/donatello.png" type="image/png">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

	<!-- Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Header -->
<header id="header">
  <div class="intro text-center">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Rodrigo Amora</h1>
            <p>Desenvolvedor Web & Mobile</p>
            <a href="#about" class="btn btn-default btn-lg page-scroll">Ler Mais</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- Navigation -->
<div id="nav">
  <nav class="navbar navbar-custom">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse"> <i class="fa fa-bars"></i> </button>
      </div>
      
      <div class="collapse navbar-collapse navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="hidden"> <a href="#page-top"></a> </li>
          <li> <a class="page-scroll" href="./#about">Home</a> </li>
          <li> <a class="page-scroll" href="./#nav">Sobre mim</a> </li>
          <li> <a class="page-scroll" href="projetos#nav">Portfolio</a> </li>
          <li> <a class="page-scroll" href="contato#nav">Contato</a> </li>
          <li> <a class="page-scroll" href="/">Blog</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
	
@yield('body')

<!-- Footer -->
<div id="footer">
  <div class="container">
  	<div class="col-6 col-md-4">
  		<h5>Contato</h5>
    	<p>
    		<ul class="mx-auto">
    			<li>
            <img src="img/email.png" alt="E-mail" width="35" height="35">
            <strong>E-mail:</strong> <a href="mailto:rodrigo.amora.freitas@gmail.com">rodrigo.amora.freitas@gmail.com</a>
          </li>
          
          <li>
            <img src="img/phone.svg" alt="Celular" width="35" height="35">
            <strong>Celular:</strong> <a href="callto:996335023">+55 (21) 99633-5023</a>
          </li>

          <li>
            <img src="img/redes_sociais/skype.png" alt="Skype" width="35" height="35">
            <strong>Skype:</strong> <a href="callto:rodrigo.amora">rodrigo.amora</a>
          </li>
    		</ul>
    	</p>
  	</div>

  	<div class="col-6 col-md-4">
  		<h5>Redes Sociais</h5>
      <a href="https://goo.gl/FNd1sV" target="_blank"><img src="img/redes_sociais/linkedin.png" alt="LinkedIn" width="35" height="35"></a>
  		<a href="https://goo.gl/729QP" target="_blank"><img src="img/redes_sociais/github-light.png" alt="GitHub" width="35" height="35"></a>
  		<a href="https://goo.gl/Rx0G1" target="_blank"><img src="img/redes_sociais/twitter.png" alt="Twitter" width="35" height="35"></a>
  		<a href="https://goo.gl/766xci" target="_blank"><img src="img/redes_sociais/facebook.png" alt="Facebook" width="35" height="35"></a>
  		<a href="https://goo.gl/aP2Ku3" target="_blank"><img src="img/redes_sociais/instagram.png" alt="Instagram" width="35" height="35"></a>
  		<a href="https://goo.gl/lwF6Sz" target="_blank"><img src="img/redes_sociais/slideshare.png" alt="SlideShare" width="35" height="35"></a>
  		<a href="https://goo.gl/zAsIGY" target="_blank"><img src="img/redes_sociais/skoob.png" alt="Skoob" width="35" height="35"></a>
      <a href="callto:rodrigo.amora"><img src="img/redes_sociais/skype.png" alt="Skoob" width="35" height="35"></a>
  	</div>
  </div>
</div>

<script type="text/javascript" src="js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.counterup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/enviarEmail.js"></script>

</body>
</html>