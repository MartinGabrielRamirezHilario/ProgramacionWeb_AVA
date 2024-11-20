<?php
    require 'conexion.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $noAlumno = intval($_POST['No_Alumno']);
    $nombreAlumno = $_POST['Nombre'];
    $apellidoAlumno = $_POST['Apellido'];
    $telefonoAlumno = $_POST['Telefono'];
    $contraseñaAlumno = $_POST['Contraseña'];
    $saldoAlumno = $_POST['Saldo_a_Deber'];

    $fechaInicio = date('Y-m-d');
    $fechaLimite = date('Y-m-d', strtotime('+1 month'));

    // Construye la consulta
    $query = "UPDATE Alumnos 
              SET Nombre='$nombreAlumno', 
                  Apellido='$apellidoAlumno', 
                  Telefono='$telefonoAlumno', 
                  Fecha_de_inicio='$fechaInicio', 
                  Fecha_de_limite='$fechaLimite', 
                  Contraseña='$contraseñaAlumno', 
                  Saldo_a_Deber='$saldoAlumno' 
              WHERE No_Alumno=$noAlumno";

    // Ejecuta la consulta y verifica errores
    if (mysqli_query($conexion, $query)) {
        echo "Registro actualizado correctamente.";
        // Redirige si es necesario
        header('Location: ../index.php');
        exit();
    } else {
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }

    // Cierra la conexión
    mysqli_close($conexion);
}
?>
