<?php

$con = mysql_connect('127.0.0.1','root','Parachutes0') or die('Error en conexion a la DB');
mysql_select_db('sakila', $con) or die('Error al seleccionar la DB');

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$foto = $_POST['foto'];

$sql = "INSERT INTO Producto (idProducto,nombre,precio,descripcion,cantidad,Clasificacion_idClasificacion,Empleado_idEmpleado) VALUES ('$id','$nombre','$precio','$descripcion','$cantidad',00003,00001)";
$path = $_SERVER['DOCUMENT_ROOT'];

$res = mysql_query($sql);

$sql_imagen = "UPDATE Producto SET foto = LOAD_FILE('$path/abbeyshop/img/tmp/$foto') where idProducto = $id";

mysql_query($sql_imagen);
$borrar="$path/abbeyshop/img/tmp/$foto";

$f = fopen("output.txt", "w");
fwrite($f, $borrar);
fclose($f);

unlink($borrar);

if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "2";
}


?>
