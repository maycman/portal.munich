<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portal Munich Automotriz</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
	<link rel="stylesheet" type="text/css" href="https://necolas.github.io/normalize.css/6.0.0/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/content/index.css">
	<link rel="stylesheet" type="text/css" href="assets/content/trap.css">
</head>
<body>
	<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
    	<div class="navbar-header">
    		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        		<span class="sr-only">Toggle navigation</span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
        		<span class="icon-bar"></span>
      		</button>
    	</div>
    	<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
    		<div class="row">
    			<div class="col-sm-1">
    				<img id="volks" class="img-responsive" src="../assets/images/gelogo.png" alt="Image Responsive">
    			</div>
    			<div class="col-sm-10"> 
    				<ul class="nav navbar-nav">   			
        				<li id="home"><a href="/">Inicio</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Call Center <b class="caret"></b></a>
	        				<ul id="mdrop" class="dropdown-menu">
	          					<li id="encuesta"><a href="/encuesta">Encuestas</a></li>
	          					<li id="notas"><a href="/notas">Reportes</a></li>
	          					<li id="Modificar"><a href="#">Modificar Encuesta</a></li>
	          					<li><a href="#">Otros</a></li>
	        				</ul>
	      				</li>
        				<li><a href="#">Ventas</a></li>
        				<li><a href="#">Servicio</a></li>
        			</ul>
        		</div>
        	</div>
    	</nav>
	</header>
	<section id="wrap">
		@yield("content")
	</section>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/scripts/index.js" type="text/javascript"></script>
</html>