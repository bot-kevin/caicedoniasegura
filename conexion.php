<?php 
    function conexion(){
        try {
            $conexion = new PDO("mysql:host=localhost;dbname=caicedonia_segura","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            //echo 'Conexion exitosa!!';
        } catch (PDOExeption $e) {
            echo 'Error al conectar con la base de datos'.$e->getMessage();
        }

        return $conexion;
    }    
?>