<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $sexo = $_POST["sexo"];
    $edad = $_POST["edad"];
    $aditamentos = $_POST["aditamentos"];
    $huespedes = $_POST["huespedes"];
    $fecha_reserva = $_POST["fecha_reserva"];

    $sql = "INSERT INTO usuarios (nombre, edad, sexo, aditamentos, huespedes, fecha_reserva)". 
    "VALUES ('".$nombre."', ".$edad.", ".$sexo.",'".$aditamentos."','".$huespedes."', '".$fecha_reserva."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>