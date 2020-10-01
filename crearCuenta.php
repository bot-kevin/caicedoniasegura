
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Usuario | Caicedonia Segura</title>

    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

    <div class="login-box">


<img  class="mapa" src="img/seguridad.png" alt="Caicedonia Segura">
    
<img  class="mapa2" src="img/caicedonia.png" alt="Segura">
    

<h1>Ingresa aquí </h1>
        <form action="crearUsuario.php" method="POST">
         <label for="usercedula ">Cedula </label>
          <input type="text" placeholder="Escriba su cedula" name="txtcedula">

		<label for="username ">Nombre </label>
          <input type="text" placeholder="Escriba su nombre" name="txtnombre">

          <label for="password"> Contraseña</label>
          <input type="password" placeholder="Escriba su contraseña" name="txtpass">

          <input type="submit" value="Ingresar">

          <!--<a href="a">Se ha perdido su contraseña</a> <br>-->
          <a href="crearCuenta.php">Crear Cuenta</a>
        </form>


    </div>
    <div>
      <iframe id="inlineFrameExample"
        title="Inline Frame Example"
        width="300"
        height="200"
        src="http://localhost:8090/geoserver/www/Visorweb/Inicio.html">
    </iframe>
    </div>
    
    
</body>
</html>