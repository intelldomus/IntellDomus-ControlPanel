<?php session_start(); ?>

<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" ><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" ><!--<![endif]-->
<html lang="it">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>IntellDomus | Panello di controllo</title>
		<!-- JavaScript -->
		<script src="js/sintesi.js"></script>
		<script src="js/optionJS.js"></script>
		<script src="js/homeJS.js"></script>
		<!-- Fogli di stile -->
		<link href="css/stile-personale.css" rel="stylesheet" />
	    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
	    <link href="css/stili-custom.css" rel="stylesheet" media="screen">
	    <!-- Modernizr -->
	    <script src="js/modernizr.custom.js"></script>
	    <!-- respond.js per IE8 -->
	    <!--[if lt IE 9]>
	    <script src="js/respond.min.js"></script>
	    <![endif]-->
	</head>
    
	<body onLoad="notify()">
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Centro di Controllo</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" onClick="changePage(0)">Home</a></li>
            <li><a href="#" onClick="changePage(1)">Led</a></li>
			<li><a href="#" onClick="changePage(4)">Sorveglianza</a></li>
			<li><a href="#" onClick="changePage(5)">SmaBell</a></li>
			<li><a href="#" onClick="changePage(7)">Sintesi Vocale</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li>
				<?php 
					if($_SESSION)
						echo '
							<div class="dropdown">
							  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
								'.$_SESSION["nome"].'
								<span class="caret"></span>
							  </button>
							  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Profilo</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Impostazioni</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Altro</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="logout.php">Disconnettiti</a></li>
							  </ul>
							</div>
							';
					else
						echo '<a href="#" onClick="changePage(3)">Connettiti</a>';
				?>
			</li>
		  </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	<br /><br /><br><br /><br /><br>
		
		<div class="container" id="contenutoBox">
			<div class="jumbotron">
				<h2>Benvenuto nel panello di controllo di IntellDomus</h2>
				<h3>Da questa panello potrai gestire tutta la tua casa.</h3>
				<div id="qrcode"></div>
			</div>	
		</div>
		<footer><br />&copy; 2015 - IntellDomus Project | <a href="index.html">Centro di Controllo - IntellDomus</a></footer>
		<!-- jQuery e plugin JavaScript  -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>	