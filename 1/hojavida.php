<?php
//datos del servidor, usuario y base de datos
$servidor = "localhost";
$usuario  = "root";
$clave    = "";
$bd       = "hojavida";

// variable de conexion 
$conectar = mysqli_connect($servidor, $usuario, $clave, $bd);

//verificar si hay conexion
if ($conectar->connect_error)
{
	die ("falla en conexion : ".$conectar->connect_error);
}

// traemos los datos del formulario
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];

//creamos linea de insercion en sql 
$insertar = "INSERT INTO dbasicos VALUE('$cedula','$nombre','$apellidos','$direccion','$telefono')";

if ($conectar->query($insertar) == true )
{
	echo "se grabo un nuevo registro";
}
else
{
	die("error en grabación : ".$conectar->error);
}

?>


