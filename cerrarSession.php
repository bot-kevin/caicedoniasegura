<?
  session_start();
  unset($_SESSION["Usuario_Activo"]); 
  unset($_SESSION["Usuario_Activo"]);
  session_destroy();
  header("location:./index.html");  
?>