<?php
require_once("../../motor/conexion.php");
	$cod=$_GET['cod'];
	if (isset($_POST['Modificar'])) {
		$var0=$_POST['carg'];
		$consultam = "UPDATE cargo SET cargo='$var0' WHERE id_cargo='$cod'";
		$resm=mysqli_query($conexion,$consultam);
		if($resm){
		?>
		<script>
			alert('Se Modifico');
			location.href='./../../inicio.php?mod=cargos';
		</script>
<?php
		}
	}
?>
	<H2><span class="label label-info">MODIFICAR REGISTRO CARGOS</span></H2>
	<TABLE Class="table table-striped table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<td>Cargo</td>
			</tr>
		</thead>
<?php
		$consulta="select * from cargo where id_cargo='$cod'";
		$res=mysqli_query($conexion,$consulta);
	while ($fila=mysqli_fetch_array($res)) {
		echo '<tr>';
		echo'
		<form method="POST" action=modificar.php?cod='.$fila['id_cargo'].'>
		<tr>
			<td><input type="text" class="form-control" name="carg" id="carg" value="'.$fila['cargo'].'"></td>

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
 