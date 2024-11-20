<?php
    require "conexion.php";
    mysqli_set_charset($conexion,'utf8');
    $nombreAlumno=$_POST['Nombre'];
    $apellidoAlumno=$_POST['Apellido'];
    $telefonoAlumno=$_POST['Telefono'];
    $saldoAlumno=$_POST['Saldo_a_Deber'];
    $contraseñaAlumno=$_POST['Contraseña'];


    $buscarAlumno="SELECT*FROM Alumnos WHERE Nombre='$nombreAlumno'";
    $resultado=$conexion->query($buscarAlumno);
    $count=mysqli_num_rows($resultado);

    if($count==1){
        echo "El usuario ya existe";
        echo '<a href="../NuevoRegistro.php">Nuevo Registro</a>';
    }else{
        $consulta="INSERT INTO Alumnos(Nombre,Apellido,Telefono,Fecha_de_limite,Saldo_a_Deber,Contraseña)
        VALUES('$nombreAlumno','$apellidoAlumno','$telefonoAlumno', DATE_ADD(CURRENT_TIMESTAMP,INTERVAL 1 MONTH),'$saldoAlumno','$contraseñaAlumno')";

        if(mysqli_query($conexion,$consulta)){
            header('Location: ../NuevoRegistro.php');
            exit();    
        }else{
            echo"Error al registrar al alumno: ".mysqli_error($conexion);
        }
    }
    mysqli_close($conexion);

?>