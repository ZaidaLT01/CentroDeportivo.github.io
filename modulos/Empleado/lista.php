
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<div class="table-responsive">
	<table border="1" width="100%" align="center" class="l">
		<tr align="center" class="t">
			<th>Turno:</th>
			<th>Cargo:</th>
			<th>Apellido Paterno:</th>
			<th>Apellido Materno:</th>
			<th>Nombres:</th>
			<th>ci:</th>
			<th>Direccion:</th>
			<th>Telefono:</th>
			<th>Fecha de Nacimiento:</th>
			<th>Genero:</th>
			<th>Fecha de Ingreso:</th>
			<th>Sueldo:</th>
			<th>Intereses:</th>
			<th>Observaciones:</th>
		</tr>
		<?php
		$consulta="SELECT t.turno, c.cargo, e.* FROM turno t,cargo c ,empleado e  WHERE t.id_turno = e.turno_id_turno and c.id_cargo = e.cargo_id_cargo ";
		$res=mysqli_query($conexion,$consulta);
		while($reg=mysqli_fetch_array($res)){
			echo "<tr align='center'>";
			echo "<td>".$reg['turno']."</td>";
			echo "<td>".$reg['cargo']."</td>";
			echo "<td>".$reg['ap_paterno']."</td>";
			echo "<td>".$reg['ap_materno']."</td>";
			echo "<td>".$reg['nombres']."</td>";
			echo "<td>".$reg['ci']."</td>";
			echo "<td>".$reg['direccion']."</td>";
			echo "<td>".$reg['telefono']."</td>";
			echo "<td>".$reg['fecha_nacimiento']."</td>";
			echo "<td>".$reg['genero']."</td>";
			echo "<td>".$reg['fecha_ingreso']."</td>";
			echo "<td>".$reg['sueldo']."</td>";
			echo "<td>".$reg['intereses']."</td>";
			echo "<td>".$reg['observacion']."</td>";
			echo '<td><a href="modulos/empleado/eliminar.php?cod='.$reg['id_empleado'].'"class="btn btn-danger"><span><i class="fa fa-trash-alt "></i></span> </td>';
			echo '<td><a href="modulos/empleado/modificar.php?cod='.$reg['id_empleado'].'"class="btn btn-warning">'; 
			echo '<span><i class="fa fa-edit "></i></span></td>';
			echo "</tr>";
		}
		?>

	</table>
	</div>
	<div class="col-md-1"></div>
</div>
</body>
</html>