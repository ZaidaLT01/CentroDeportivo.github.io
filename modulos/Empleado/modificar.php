<?php
session_start();
$usuario=$_SESSION["usuario"];
$pasword=$_SESSION["pasword"];                                                   
$nivel=$_SESSION["tipo_usuario_id_tipo"];
$nom=$_SESSION["nombres"];
require_once("../../motor/conexion.php");
	$cod=$_GET['cod'];
	if (isset($_POST['Modificar'])) {
		$var0=$_POST['turno'];
		$var1=$_POST['cargo'];
		$var2=$_POST['ap_p'];
		$var3=$_POST['ap_m'];
		$var4=$_POST['nom'];
		$var5=$_POST['ci'];
		$var6=$_POST['dir'];
		$var7=$_POST['tel'];
		$var9=$_POST['genero'];
		$var10=$_POST['fech_i'];
		$var11=$_POST['su'];
	//$in=$_POST['interes[]'];
	$int="";
	/*	foreach ($in as $i => $valor) {
			$int=$int.$in[$i]." ";
		}
echo $int;*/

		$consultam = "UPDATE empleado SET turno_id_turno='$var0',cargo_id_cargo='$var1',ap_paterno='$var2',ap_materno='$var3',nombres='$var4',ci='$var5',direccion='$var6',telefono=$var7,genero='$var9',fecha_ingreso='$var10',sueldo=$var11,intereses='$int' WHERE id_empleado='$cod';";
		$resm=mysqli_query($conexion,$consultam);
		if($resm){
		?>
		<script>
			alert('Se Modifico');
			location.href='./../../inicio.php?mod=empleados';
		</script>

<?php
}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>

	<!--añadiendo estilos booststrap css-->
	<link href="../../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--añadiendo estilos font- awesome css-->
    <link href="../../estilos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--añadiendo estilo css-->
    <link href="../../estilos/css/agency.min.css" rel="stylesheet">

</head>
<body >
	<?php require_once('../../motor/conexion.php');?>
	
			<div class="col-12">
				<nav class="navbar navbar-expand-lg fixed-top" id="mainNav2">
					<div class="container">
			        <a class="navbar-brand" href="#page-top"><img src="../../img/logo1.png" width="260px" height="70px"></a>
				          <ul class="navbar-nav text-uppercase ">
					        <!-- Dropdown -->
						    <li class="nav-item dropdown">
						      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
						        <i class="fa fa-user-circle-o"></i></i>&nbsp;&nbsp;Bienvenido <?php echo $usuario; ?>
						      </a>
							      <div class="dropdown-menu dropdown-menu-righ">
							      	<?php
										$consulta="SELECT nombre FROM tipo_usuario where id_tipo='".$nivel."'";
										$resultado=mysqli_query($conexion,$consulta);
										$filas=mysqli_num_rows($resultado);
											if($filas!=0)
												{  
													while($dato=mysqli_fetch_array($resultado))
													    { 
														$tipo=$dato['nombre'];?>
														<a class="dropdown-item dropdown-item disabled" ><?php echo "$tipo";?></a>
														<?php
														}
													}
											?>
							        <div class="dropdown-divider"></div>
							        <a class="dropdown-item" href="phplogin/editar_usuario.php"><i class="fas fa-user-edit"></i>Editar Datos</a>
							        <a class="dropdown-item" href="phplogin/cerrar.php "><i class="fas fa-sign-out-alt "></i>Cerrar Session</a>
							      </div>
						    </li>
				          </ul>
				        </div>
				    </div>
				</nav>			
			</div>
			<section>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-xs-2 col-sm-2	col-md-2	col-lg-2 col-xl-2">
					<!--no funciona en extra pequeño revisar preguntar-->
					<?php //menu vertical
					//llamar por sesiones en menu.php
						require_once('../../layouts/menuMod.php');
					?>
				</div>
				<div class="col-12 col-xs-10 col-sm-10	col-md-10	col-lg-10 col-xl-10"> 
					<div id="cuerpo">
						<div class="container">
							<br>
							<H2><span class="label label-info">MODIFICAR REGISTRO EMPLEADOS</span></H2>
							<hr>
							<div class="table-responsive">
							<TABLE class="border="1" width="100%" align="center" class="l"">
								<thead align="center" class="t">
									<tr>
										<th>Turno:</th>
										<th>Cargo:</th>
										<th>Apellido Paterno:</th>
										<th>Apellido Materno:</th>
										<th>Nombres:</th>
										<th>ci:</th>
									</tr>
								</thead>
							<?php
								$consulta="select * from empleado where id_empleado='$cod'";
								$res=mysqli_query($conexion,$consulta);
							while ($fila=mysqli_fetch_array($res)) {
								echo'
								<form method="POST" action=modificar.php?cod='.$fila['id_empleado'].'>
								<tr>
									<td>';
										
							            $consulta="SELECT id_turno,turno FROM turno";
							            $r=mysqli_query($conexion,$consulta) or die(mysql_error()); 
							            echo "<select name='turno' class='form-control'> ";
							            while ($registro=mysqli_fetch_array($r)) {
							            echo "<option value='".$registro[0]."'> ".$registro[1]." </option>";
							            }
							            echo "</select>"; 
							            
								echo'</td>';
								echo'<td>';
							            $consulta="SELECT id_cargo,cargo FROM cargo";
							            $r=mysqli_query($conexion,$consulta) or die(mysql_error());
							            echo "<select name='cargo' class='form-control'>"; 
							            while($registro=mysqli_fetch_row($r)) 
							            { 
							            echo "<option value='".$registro[0]."'>".$registro[1]."</option>"; 
							            } 
							            echo "</select>"; 
								echo'</td>';
								echo '<td><input type="text" class="form-control" name="ap_p" id="ap_p" value="'.$fila['ap_paterno'].'"></td>
									<td><input type="text" class="form-control" name="ap_m" id="ap_m" value="'.$fila['ap_materno'].'"></td>
									<td><input type="text" class="form-control" name="nom" id="nom" value="'.$fila['nombres'].'"></td>
									<td><input type="number" class="form-control" name="ci" id="ci" value="'.$fila['ci'].'"></td></tr><tr><td><br></td></tr>';?>
									
									<thead align="center" class="t">
										
									<tr>
										<th>Direccion:</th>
										<th>Telefono:</th>
										<th colspan="2" >Genero:</th>
										<th>Fecha de Ingreso:</th>
										<th>Sueldo:</th>
									</tr>
									</thead>
							<?php	
								echo ' 

									<td><input type="text" class="form-control" name="dir" id="dir" value="'.$fila['direccion'].'"></td>
									<td><input type="number" class="form-control" name="tel" id="tel" value="'.$fila['telefono'].'"></td>
									<td>  <input type="radio" name="genero" id="genero" value="F" class="form-horizontal">
										Femenino</td>  
						            <td><input type="radio" name="genero" id="genero" value="M" class="form-horizontal">
						                Maculino</td>
									<td>
									<input type="date" class="form-control" name="fech_i" id="fech_i" value="'.$fila['fecha_ingreso'].'"></td>
									<td><input type="number" class="form-control" name="su" id="su" value="'.$fila['sueldo'].'"></td>
								</tr>
								';
								}
							?>
							</table>
						</div>
							<br>
							<div class="row show-grid">
					          <div class="col-md-8">
					                 <a href="./../../inicio.php?mod=empleados" class="btn btn-danger mb-2 "><i class="fa fa-"></i>Volver</a>
					          </div><br>
					          <div class="col">
					            <div class="form form-inline">
					            	 <button class="btn btn-danger  mb-2 mr-sm-2 " type="submit" name="Modificar" id="Modificar" value="Modificar">Modificar </button>
					              </form>			              
					            </div>
					          </div>
					        </div> 								
						</div>
					</div>
				</div>	
			</div>
		</div>
		</section>
		<br>
		</footer>
		<?php 
			include_once('../../layouts/pie.php');
		?>
		</footer>

</body>
	<!--El orden del script es importante este scrip coloca fa fas principales
	<script src="layouts/estilos/vendor/bootstrap/js/all.js"></script>-->
    <!-- este j query permite el cambio y fa fas diferentes -->
    <script src="../../estilos/vendor/jquery/jquery.min.js"></script>
    <!-- Script para cambios -->
    <script src="../../estilos/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Script para cambios -->
    <script src="../../estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- averiguar para que sirve -->
    <script src="../../estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Script para cambios-->
    <script src="../../estilos/js/agency.min.js"></script>	

</html>
 