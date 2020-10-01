<?php 

require("conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
$cedula = $_POST['txtcedula'];
$pass = $_POST['txtpass'];
$conexion = conexion(); // CREA LA CONEXION

//PREPARA LA SENTENCIA PHP Y EJECUTA 
$sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE cedula = :cedula AND password = :pass");
$sentencia->execute(array(':cedula' => $cedula, ':pass'=>$pass));

// ARRAY JSON QUE SE ENVIA COMO RESULTADO A ANGULAR
//$json_to_sent=array();
//class Result {}
    
// GENERA LOS DATOS DE RESPUESTA
//$response = new Result();

if($result = $sentencia->fetchAll(PDO::FETCH_ASSOC)){
	//$json_to_sent = $result;
	//$response->resultado = 'OK';
	//$response->mensaje = 'LOGIN EXITOSO';
	header("location:./home.php");	
} else {
	//$json_to_sent ['fds']= "no";
	//$response->resultado = 'FAIL';
	//$response->mensaje = 'LOGIN FALLIDO';
	//echo "No se puede conectar";
	 echo"<script type='text/javascript'>
			 alert('Datos incorrectos');
			 window.location='./index.html';
			 </script>";
}
?>