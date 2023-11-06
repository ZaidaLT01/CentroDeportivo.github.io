<?php
require_once("motor/conexion.php");

$em=$_POST['empresa'];
$co=$_POST['contacto'];
$ma=$_POST['mail'];
$te=$_POST['telefono'];
$di=$_POST['direccion'];

$a=$_FILES['imagen']['name'];
$b=$_FILES['imagen']['tmp_name'];
$c=$_FILES['imagen']['size'];

$q="insert into proveedor(empresa,contacto,mail,telefono,direccion,logo) values ('$em','$co','$ma','$te','$di','$a')";

$r=mysqli_query($conexion,$q) ;
if($r){
	@copy($b, "../modulos/Proveedor/img/".$a);

?>
<script>
			alert('Se registro');
			location.href='./inicio.php?mod=proveedores';
		</script>

<?php
}
else{
?>
		<script >
			alert('No se registro');
			location.href='./inicio.php?mod=proveedores';
		</script>
<?php	
}
?>
