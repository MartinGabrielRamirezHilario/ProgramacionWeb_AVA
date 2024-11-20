<?php
    require 'conexion.php';

    session_start();
    
    $nombreAlumno=$_POST['Nombre'];
    $apellidoAlumno=$_POST['Apellido'];
    $clave=$_POST['Contraseña'];

    $q = "SELECT COUNT(*) as contar from Alumnos where Nombre= '$nombreAlumno' AND Contraseña = '$clave'";

    $consulta=mysqli_query($conexion,$q);

    $array=mysqli_fetch_array($consulta);

    if($array['contar']>0){
        //Si el usuario existe manda a la lista
        $_SESSION['Nombre']=$nombreAlumno;
        header("Location:../index.php");
        exit();
    }else{
        //Si no existe lo devuelve a la pagina login
        header("Location:../login.php");
        exit();
    }

    // Cerrar conexión
    $stmt->close();
    $conexion->close();
?>