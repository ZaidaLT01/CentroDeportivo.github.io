<?php
# Cargamos la librería dompdf.
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
	include("../motor/conexion.php");	
	$consulta="select *from cliente ";
    $res=mysqli_query($conexion,$consulta);
# Contenido HTML del documento que queremos generar en PDF.
$html='
	<link href="../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../estilos/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="../estilos/css/agency.min.css" rel="stylesheet">
    <div class="container">
	  <br>
	  <h2 align="center">CLIENTES</h2>
			<table border="1" width="100%" align="center" class="l">
                <tr align="center" class="t">
                  <th>Usario/Nombre</th>
                  <th>Nit/Ci</th>
                  <th>Razon Social</th>
                  <th>Telefono</th>
                  <th>Puntos Totales</th>
                </tr>
		';

				while($reg=mysqli_fetch_array($res)){
                      $html.='<tr align="center">
                      		  <td>'.$reg['usuario'].'</td>
                              <td>'.$reg['nit_ci'].'</td>
                              <td>'.$reg['rz'].'</td>
                              <td>'.$reg['telefono'].'</td>
                              <td>'.$reg['sumapuntos'].'</td>
       						  </tr>';
                        }

	$html.='</table>
			</div>
	';
# Instanciamos un objeto de la clase DOMPDF.
$mipdf = new DOMPDF();

# Definimos el tamaño y orientación del papel que queremos.
# O por defecto cogerá el que está en el fichero de configuración.
$mipdf ->set_paper("A4", "portrait");

# Cargamos el contenido HTML.
$mipdf ->load_html(utf8_decode($html));

# Renderizamos el documento PDF.
$mipdf ->render();

# Enviamos el fichero PDF al navegador.
$mipdf ->stream('VentaProducto.pdf');
?>