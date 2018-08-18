<?php
//index.php
session_start();

include '../person.php';
if(!isset($_SESSION["sesion"]))
{
    header("location: ../index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Proyecto Catalogos</title>
	<meta charset="UTF-8">

	
	<link href="img/logo3.jpg" rel="shortcut icon"/>

	

	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
 



</head>
<body>
	
	<div id="preloder">
		<div class="loader"> 
			<img src="img/logo.jpg" width="300" height="300" />
			<h2>Bienvenidos.....</h2>
		</div> 
	</div>



	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt="">
		</div>
	
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="home.php">Inicio</a></li>
				<li><a href="Plantillas/Plantilla2.html">Catalogo de Proyectos</a></li>
				<li><a href="Plantillas/Plantilla3.html">Informacion de Personas</a></li>
				<li><a href="Plantillas/Plantilla4.html">Destino</a></li>
				<li><a href="Plantillas/Plantilla5.html">Requisitos</a></li>
				<li><a href="Plantillas/Plantilla6.html">Diligencias</a></li>
                <li><a href="Plantillas/Plantilla7.html">Registro</a></li>
				
				

                <?php
                $person = new person;
                $persona = $person->getInicio();

                echo "<li><a href='finsesion.php'></a>$persona</li>"
                ?>
            </ul>
		</nav>
	</header> 

	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/logo2.png" alt="">
				<p></p>
			</div>
		</div>
		
		<div>
			<div></div>
			<div> </div>
		</div>
	</div>
	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
