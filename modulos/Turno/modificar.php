<?php
require_once("../../motor/conexion.php");
	$cod=$_GET['cod'];
	if (isset($_POST['Modificar'])) {
		$var0=$_POST['t'];
		$var1=$_POST['i'];
		$var2=$_POST['s'];
		$consultam = "UPDATE turno SET turno='$var0', ingreso='$var1', salida='$var2' WHERE id_turno='$cod'";
		$resm=mysqli_query($conexion,$consultam);
		if($resm){
			echo "
			<script>
			window.alert('registro modificado con exito');
			window.location='./../../inicio.php?mod=turnos';
			</script>
			";
		}
	}
?>
	<H2><span class="label label-info">MODIFICAR REGISTRO TURNOS</span></H2>
	<TABLE Class="table table-striped table-bordered table-hover">
		<thead class="thead-dark">
			<tr>
				<td>Turno</td>
				<td>Ingreso</td>
				<td>Salida</td>
			</tr>
		</thead>
<?php
		$consulta="select * from turno where id_turno='$cod'";
		$res=mysqli_query($conexion,$consulta);
	while ($fila=mysqli_fetch_array($res)) {
		echo '<tr>';
		echo'
		<form method="POST" action=modificar.php?cod='.$fila['id_turno'].'>
		<tr>
			<td><input type="text" class="form-control" name="t" id="t" value="'.$fila['turno'].'"></td>
			<td><input type="time" class="form-control" name="i" id="i" value="'.$fila['ingreso'].'"></td>
			<td><input type="time" class="form-control" name="s" id="s" value="'.$fila['salida'].'"></td>
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
 