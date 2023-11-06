<!DOCTYPE html>
<html lang="es">
<head>

	<title>Sistema</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<!--añadiendo estilos booststrap css-->
	<link rel="stylesheet" type="text/css" href="estilos/vendor/bootstrap/css/bootstrap.min.css">
    <!--añadiendo estilos font- awesome css-->
    <link href="estilos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--añadiendo estilo css-->
    <link href="estilos/css/agency.min.css" rel="stylesheet">

</head>
<body>
	<div class="col-12">
		<?php //barra superior logo llamar en sesion por log.php
			require_once('encabezadoVisita.php');
		?>			
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-sm-3	col-md-2	col-lg-2 col-xl-2">
				<!--no funciona en extra pequeño revisar preguntar-->
				<?php //menu vertical
				//llamar por sesiones en menu.php
					require_once('menuVisita.php');
				?>
			</div>
			<div class="col-12 col-sm-9	col-md-10	col-lg-10 col-xl-10" >
				<?php
				require_once('cuerpoVisita.php');
				?>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
		<?php 
			include_once('pie.php');
		?>
		</div>
	</footer>

</body>
	<!--El orden del script es importante este scrip coloca fa fas principales
	<script src="layouts/estilos/vendor/bootstrap/js/all.js"></script>-->
    <!-- este j query permite el cambio y fa fas diferentes -->
    <script src="estilos/vendor/jquery/jquery.min.js"></script>
    <!-- Script para cambios -->
    <script src="estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- averiguar para que sirve -->
    <script src="estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Script para cambios-->
    <script src="estilos/js/agency.min.js"></script>	

</html>