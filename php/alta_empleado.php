<?php

$con = mysql_connect('127.0.0.1','root','Parachutes0') or die('Error en conexion a la DB');
mysql_select_db('sakila', $con) or die('Error al seleccionar la DB');

$email = $_POST['emailEmpleado'];
$password = $_POST['passwordEmpleado'];
$nombre = $_POST['nombreEmpleado'];
$apPeterno = $_POST['paternoEmpleado'];
$apMeterno = $_POST['maternoEmpleado'];
$nss = $_POST['empleadoNSS'];
$telefono = $_POST['empleadoTelefono'];

$result = mysql_query('SELECT MAX(idEmpleado) FROM sakila.Empleado');
$row = mysql_fetch_row($result);
$id = $row[0];
$id = (int) $id + 1;


$sql = "INSERT INTO Empleado (idEmpleado,nombre,apPaterno,apMaterno,NSS,email,telefono,password) VALUES ('$id','$nombre','$apPeterno','$apMeterno','$nss','$email','$telefono','$password')";

$res = mysql_query($sql);

if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "2";
}


?>
