<?php

$con = mysql_connect('127.0.0.1','root','Parachutes0') or die('Error en conexion a la DB');
mysql_select_db('sakila', $con) or die('Error al seleccionar la DB');

$idProducto = $_POST['idProducto'];

$sql = "DELETE from sakila.Producto where idProducto='$idProducto'";

$res = mysql_query($sql);

if(mysql_affected_rows()>0){
	echo "1";
	header('Location: catalogo.php');
}
else{
	echo "2";
}


?>
