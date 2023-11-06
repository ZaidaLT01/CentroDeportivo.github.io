<?php
/*
* Agrega el producto a la variable de sesion de productos.
*/
if(!empty($_POST)){
	if(isset($_POST["id_producto"]) && isset($_POST["cantidad"])){
		// si es el primer producto simplemente lo agregamos
		if(empty($_SESSION["venta"])){
			$_SESSION["venta"]=array( array("id_producto"=>$_POST["id_producto"],"cantidad"=> $_POST["cantidad"]));
		}else{
			// apartie del segundo producto:
			$cart = $_SESSION["venta"];
			$repeated = false;
			// recorremos el carrito en busqueda de producto repetido
			foreach ($cart as $c) {
				// si el producto esta repetido rompemos el ciclo
				if($c["id_producto"]==$_POST["id_producto"]){
					$repeated=true;
					break;
				}
			}
			// si el producto es repetido no hacemos nada, simplemente redirigimos
			if($repeated){
				print "<script>alert('Error: Producto Repetido!');</script>";
			}else{
				// si el producto no esta repetido entonces lo agregamos a la variable cart y despues asignamos la variable cart a la variable de sesion
				array_push($cart, array("id_producto"=>$_POST["id_producto"],"cantidad"=> $_POST["cantidad"]));
				$_SESSION["venta"] = $cart;
			}
		}
		print "<script>window.location='./inicio.php?mod=Sventas';</script>";
	}
}

?>



