if ($_GET['mod']=='registrarS') {
			require_once('modulos/registraservicios.php');
		}
	if ($_GET['mod']=='listaS') {
			require_once('modulos/servicios.php');
		}
	//cargo
	if ($_GET['mod']=='registrarCA') {
		require_once('modulos/Cargo/registro.php');
	}if ($_GET['mod']=='listaCA') {
		require_once('modulos/Cargo/lista.php');
	} if ($_GET['mod']=='guardarCA') {
		require_once('modulos/Cargo/guardar.php');
	}if ($_GET['mod']=='modificarCA') {
		require_once('modulos/Cargo/modificar.php');
	}
	//categorias
		//cargo

	if ($_GET['mod']=='registrarCAT') {
		require_once('modulos/categoriaP/registro.php');
	}if ($_GET['mod']=='listaCAT') {
		require_once('modulos/categoriaP/lista.php');
	} if ($_GET['mod']=='guardarCAT') {
		require_once('modulos/categoriaP/guardar.php');
	}if ($_GET['mod']=='modificarCAT') {
		require_once('modulos/categoriaP/modificar.php');
	}

	//empleados
	if ($_GET['mod']=='registrarE') {
		require_once('modulos/Empleado/registro.php');
	}if ($_GET['mod']=='listaE') {
		require_once('modulos/Empleado/lista.php');
	} if ($_GET['mod']=='guardarE') {
		require_once('modulos/Empleado/guardar.php');
	}if ($_GET['mod']=='modificarE') {
		require_once('modulos/Empleado/modificar.php');
	} 

	//clientes
	if ($_GET['mod']=='registrarC') {
		require_once('modulos/Cliente/registroCompleto.php');
	}
	if ($_GET['mod']=='listaC') {
		require_once('modulos/Cliente/lista.php');
	} 
	if ($_GET['mod']=='guardarC') {
		require_once('modulos/Cliente/guardar.php');
	}
	if ($_GET['mod']=='modulos/modificarC') {
		require_once('modulos/Cliente/modificar.php');
	} 
	
	//proveedores	//proveedores
	if ($_GET['mod']=='registrarP') {
		require_once('modulos/Proveedor/registro.php');
	}if ($_GET['mod']=='listaP') {
		require_once('modulos/Proveedor/lista.php');
	} 
	if ($_GET['mod']=='guardarP') {
		require_once('modulos/Proveedor/guardar.php');
	}if ($_GET['mod']=='modificarP') {
		require_once('modulos/Proveedor/modificar.php');
	}
	//producto
	if ($_GET['mod']=='registrarPd') {
		require_once('modulos/ProductoS/registro.php');
	}
	if ($_GET['mod']=='listaPd') {
		require_once('modulos/ProductoS/lista.php');
	} 
	if ($_GET['mod']=='guardarPd') {
		require_once('modulos/ProductoS/guardar.php');
	}
	if ($_GET['mod']=='modificarPd') {
		require_once('modulos/ProductoS/modificar.php');
	} 
	//promociones
	if ($_GET['mod']=='registrarPromo') {
		require_once('modulos/Promo/registro.php');
	}
	if ($_GET['mod']=='listaPromo') {
		require_once('modulos/Promo/lista.php');
	} 
	if ($_GET['mod']=='guardarPromo') {
		require_once('modulos/Promo/guardar.php');
	}
	if ($_GET['mod']=='modificarPromo') {
		require_once('modulos/Promo/modificar.php');
	} 
	//ventas
	if ($_GET['mod']=='registrarV') {
		require_once('modulos/registroVenta.php');
	}if ($_GET['mod']=='listaV') {
		require_once('modulos/carrito.php');
	}