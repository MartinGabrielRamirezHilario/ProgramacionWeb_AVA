<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    $registroEliminado=$_POST['No_Alumno'];
    $consulta="DELETE FROM Alumnos WHERE No_Alumno='$registroEliminado'";

    mysqli_query($conexion,$consulta);
    mysqli_close($conexion);
    header('Location: ../eliminarUsuario.php');
?>