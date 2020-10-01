
<?php 

require("conexion.php"); // IMPORTA EL ARCHIVO CON LA CONEXION A LA DB
$cedula = $_POST['txtcedula'];
$pass = $_POST['txtpass'];
$conexion = conexion(); // CREA LA CONEXION

//PREPARA LA SENTENCIA PHP Y EJECUTA 
$sentencia = $conexion->prepare("SELECT * FROM usuarios WHERE cedula = :cedula AND password = :pass");
$sentencia->execute(array(':cedula' => $cedula, ':pass'=>$pass));



if($result = $sentencia->fetchAll(PDO::FETCH_ASSOC)){
	session_start();                    
    $_SESSION["Usuario_Activo"]=$result;
	header("location:./home.php");	
	//print_r($_SESSION["Usuario_Activo"]);
} else {
	 echo"<script type='text/javascript'>
			 alert('Datos incorrectos');
			 window.location='./index.html';
			 </script>";
}
?>