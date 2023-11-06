<?php
# Cargamos la librería dompdf.
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
	include("../motor/conexion.php");	

    $consulta="SELECT t.turno, c.cargo, e.* FROM turno t,cargo c ,empleado e  WHERE t.id_turno = e.turno_id_turno and c.id_cargo = e.cargo_id_cargo ";
    $res=mysqli_query($conexion,$consulta);
# Contenido HTML del documento que queremos generar en PDF.
$html='
	<link href="../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../estilos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../estilos/css/agency.min.css" rel="stylesheet">

	  <br>
	  <h2 align="center" class="text-danger">EMPLEADOS</h2>
			<table border="1" align="center" class="l">
                <tr align="center" class="t">
                  <th>Turno:</th>
                  <th>Cargo:</th>
                  <th>Apellido Paterno:</th>
                  <th>Apellido Materno:</th>
                  <th>Nombres:</th>
                  <th>ci:</th>
                  <th>Direccion:</th>
                  <th>Telefono:</th>
                  <th>Genero:</th>
                  <th>Fecha de Ingreso:</th>
                  <th>Sueldo:</th>
                  <th>Observaciones:</th>
                </tr>
		';

				while($reg=mysqli_fetch_array($res)){
                      $html.='<tr align="center">
                      		  <td>'.$reg['turno'].'</td>
                            <td>'.$reg['cargo'].'</td>
                            <td>'.$reg['ap_paterno'].'</td>
                            <td>'.$reg['ap_materno'].'</td>
                            <td>'.$reg['nombres'].'</td>
                            <td>'.$reg['ci'].'</td>
                            <td>'.$reg['direccion'].'</td>
                            <td>'.$reg['telefono'].'</td>
                            <td>'.$reg['genero'].'</td>
                            <td>'.$reg['fecha_ingreso'].'</td>
                            <td>'.$reg['sueldo'].'</td>
                            <td>'.$reg['observacion'].'</td>
       						  </tr>';
                        }
	$html.='</table>
		
	';
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("A4", "landscape");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('VentaProducto.pdf');
?>