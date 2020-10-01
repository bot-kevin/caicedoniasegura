<?php 

require("conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
$cedula = $_POST['txtcedula'];
$pass = $_POST['txtpass'];
$nombre = $_POST['txtnombre'];
$conexion = conexion(); // CREA LA CONEXION

//PREPARA LA SENTENCIA PHP Y EJECUTA 
$sth = $conexion->prepare('SELECT cedula FROM usuarios
    WHERE cedula =' . $cedula);
$sth->execute();
$result = $sth->fetchAll(PDO::FETCH_ASSOC);

if ($result) {
	echo"<script type='text/javascript'>
			 alert('El usuario ya existe');
			 window.location='./crearCuenta.php';
			 </script>";
}else {
	$sentencia = $conexion->prepare("INSERT INTO usuarios (nombre,cedula,password,tipo_usuario) VALUES (:nombre,:cedula,:password,'1') ");
	$sentencia->bindParam(':nombre',$nombre);
	$sentencia->bindParam(':password',$pass);
	$sentencia->bindParam(':cedula',$cedula);

	$res = $sentencia->execute();	
	echo"<script type='text/javascript'>
			 alert('Creado con exito');
			 window.location='./index.html';
			 </script>";
}





?>