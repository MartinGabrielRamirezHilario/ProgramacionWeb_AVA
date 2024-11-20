<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    
</head>
<body>
    <!--Aqui pondre una barra navegadora donde incluye logo, Nuevo Registro, modificar registro y salir-->
    <div>
        <nav class="indigo">
            <div class="nav-wrapper">
                <a href="" class="brand-logo left">
                    <img src="media/logoGenerico.png" alt="Aqui va el logo" style="height: 80px;">
                </a>
                <a href="login.php" class="btn red right" style="height: 65px; line-height: 70px"; >Salir</a>
                <a href="eliminarUsuario.php" class="btn indigo right" style="height: 65px; line-height: 70px;">Eliminar Usuario</a>
                <a href="modificarRegistro.php" class="btn indigo right" style="height: 65px; line-height: 70px"; >Cambiar Registro</a>
                <a href="NuevoRegistro.php" class="btn indigo right" style="height:65px; line-height:70px">Nuevo registro</a>
            </div>            
        </nav>
    </div>
    
    <!-- Esto es para imprimir la tabla e imprima los datos directamente de la base de datos y esta el boton para eliminar-->
    <div>
        <?php
        // Esto es para incluir conexion.php
        require "Base-Logica/conexion.php";
        mysqli_set_charset($conexion, 'utf8');

        // Aquí se genera el query que usaremos para guardar los resultados de la conexión
        $consulta_sql = "SELECT * FROM Alumnos";
        $resultado = $conexion->query($consulta_sql);

        // Verificar si hay registros en la tabla, mas abajo se muetra la tabla
        if ($resultado && $resultado->num_rows > 0) {
            
                echo "<table class='striped centered'>
                    <thead>
                        <tr>
                            <th class='card-panel blue'>No Alumno</th>
                            <th class='card-panel blue'>Nombre</th>
                            <th class='card-panel blue'>Apellido</th>
                            <th class='card-panel blue'>Teléfono</th>
                            <th class='card-panel blue'>Fecha de Inicio</th>
                            <th class='card-panel blue'>Fecha Límite</th>
                            <th class='card-panel blue'>Saldo a Deber</th>
                        </tr>
                    </thead>
                
            
                <tbody>";
            while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['No_Alumno']}</td>
                        <td>{$row['Nombre']}</td>
                        <td>{$row['Apellido']}</td>
                        <td>{$row['Telefono']}</td>
                        <td>{$row['Fecha_de_inicio']}</td>
                        <td>{$row['Fecha_de_limite']}</td>
                        <td>{$row['Saldo_a_Deber']}</td>
                     </tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<h5 class='red-text center-align'>No existe ningún registro</h5>";
        }
        ?>
    </div>

</body>
</html>