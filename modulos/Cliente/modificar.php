<?php
	
require_once("../../motor/conexion.php");
	$cod=$_GET['cod'];
	if (isset($_POST['Modificar'])) {
		$var0=$_POST['raz'];
		$var1=$_POST['nit_ci'];
		$var2=$_POST['nom'];
		$var3=$_POST['t'];

		$consultam = "UPDATE cliente SET rz='$var0',nit_ci='$var1',usuario='$var2',telefono=$var3 WHERE id_cliente='$cod'";
		$resm=mysqli_query($conexion,$consultam);
			if($resm){
					?>
			<script>
						alert('Se Modifico');
						location.href='./../../inicio.php?mod=clientes';
					</script>

			<?php

			}
	}
?>
	<H2><span class="label label-info">MODIFICAR REGISTRO CLIENTE</span></H2>
	<TABLE Class="table table-striped table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<td>Razon</td>
				<td>Nit</td>
				<td>Nombre</td>
				<td>Telefono</td>
			</tr>
		</thead>
<?php
		$consulta="select * from cliente where id_cliente='$cod'";
		$res=mysqli_query($conexion,$consulta);
	while ($fila=mysqli_fetch_array($res)) {
		echo '<tr>';
		echo'
		<form method="POST" action=modificar.php?cod='.$fila['id_cliente'].'>
		<tr>
			<td><input type="text" class="form-control" name="raz" id="raz" value="'.$fila['rz'].'"></td>
			<td><input type="text" class="form-control" name="nit_ci" id="nit_ci" value="'.$fila['nit_ci'].'"></td>
			<td><input type="text" class="form-control" name="nom" id="nom" value="'.$fila['usuario'].'"></td>
			<td><input type="text" class="form-control" name="t" id="t" value="'.$fila['telefono'].'"></td>

		</tr>
		<tr>
			<td><br></td>
		</tr>
		
		<td colspan="3"><div align="center"><input type="submit" name="Modificar" id="Modificar" value="Modificar" class="btn btn-primary"></div></td>
		</form>
		</tr>';
	}
?>
</table>
 