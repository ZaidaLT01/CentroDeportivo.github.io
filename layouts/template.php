<?php
error_reporting(E_ALL);
require_once('motor/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<title>Sistema</title>
	<!--archivos de informacion avergiguar-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<!--añadiendo estilos booststrap css-->
	<link href="estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--añadiendo estilos font- awesome css-->
    <link href="estilos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--añadiendo estilo css-->
    <link href="estilos/css/agency.min.css" rel="stylesheet">
    <!--añadiendo estilos booststrap css-->
	<link href="estilos/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css" rel="stylesheet" type="text/css">

</head>
<body >
	<?php require_once('motor/conexion.php');?>
	
			<div class="col-12">
				<?php //barra superior logo llamar en sesion por log.php
					require_once('encabezado.php');
				?>				
			</div>
			<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-xs-2 col-sm-2	col-md-2	col-lg-2 col-xl-2">
					<!--no funciona en extra pequeño revisar preguntar-->
					<?php //menu vertical
					//llamar por sesiones en menu.php
						require_once('menu.php');
					?>
				</div>
				<div class="col-12 col-xs-10 col-sm-10	col-md-10	col-lg-10 col-xl-10"> 
					<?php //cuerpo
					//llamar por sesiones en cuerpo.php
						require_once('cuerpo.php');
					?>
				</div>	
			</div>
		</div>
		</section>
		<br>
		</footer>
		<?php 
			include_once('pie.php');
		?>
		</footer>

</body>
	<!--El orden del script es importante este scrip coloca fa fas principales
	<script src="layouts/estilos/vendor/bootstrap/js/all.js"></script>-->
    <!-- este j query permite el cambio y fa fas diferentes -->
    <script src="estilos/vendor/jquery/jquery.min.js"></script>
    <!-- Script para cambios -->
    <script src="estilos/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Script para cambios -->
    <script src="estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- averiguar para que sirve -->
    <script src="estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Script para cambios-->
    <script src="estilos/js/agency.min.js"></script>	
    <!-- Script para cambios-->
    <script src="estilos/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js"></script>

</html>