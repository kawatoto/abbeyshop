<?php

$con = mysql_connect('127.0.0.1','root','Parachutes0') or die('Error en conexion a la DB');
mysql_select_db('sakila', $con) or die('Error al seleccionar la DB');

$nss = $_POST['nss'];

$sql = "SELECT * from sakila.Empleado where nss='$nss'";

$result = mysql_query($sql, $con);

if($row=mysql_fetch_row($result)){
 	/*$nombre= $row['nombre'];
	$email= $row['email'];
	$password= $row['password'];
	$apPaterno= $row['apPaterno'];
	$apMaterno= $row['apMaterno'];
	$nss= $row['nss'];
	$telefono= $row['telefono'];*/

 	$f = fopen("output.txt", "w");
 	fwrite($f, json_encode($row));
 	fclose($f);
	echo json_encode($row);

}
else {
	echo "error al encontrar empleado";
}
?>
