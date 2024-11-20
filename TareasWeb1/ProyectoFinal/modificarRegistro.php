<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <!-- Barra azul -->
    <div>
        <nav class="indigo">
            <a href="" class="brand-logo left">
                <img src="media/logoGenerico.png" alt="Aqui va el logo" style="height: 80px;" >
            </a>
            <a href="login.php" class="btn red right" style="height: 65px; line-height: 70px"; >Salir</a>
            <a href="eliminarUsuario.php" class="btn indigo right" style="height: 65px; line-height: 70px;">Eliminar Usuario</a>
            <a href="NuevoRegistro.php" class="btn indigo right" style="height:65px; line-height:70px">Nuevo registro</a>
            <a href="index.php" class="btn indigo right" style="height: 65px; line-height:70px;">Lista de alumnos</a>
    </div>

    <!-- Aqui se ingresa el nuevo registro -->
    <div>
        <header>
            <h3 text-align:left>Datos del alumno</h3>
        </header>

        <div class="container">
            <form action="Base-Logica/UPDATERegistro.php" method="post">
                <div>
                    <h5 text-align:left>Numero de Alumno a modificar:</h5>
                    <input type="text" name="No_Alumno" required maxlength="20">
                    <h5 text-align:left>Nombre:</h5>
                    <input type="text" name="Nombre" required maxlength="20">
                    <h5 text-align:left>Apellido:</h5>
                    <input type="text" name="Apellido" required maxlength="20">
                    <h5 text-align:left>Numero de telefono</h5>
                    <input type="text" name="Telefono" required maxlength="10">
                    <h5 text-align:left>Contraseña:</h5>
                    <input type="text" name="Contraseña" required maxlength="10">
                    <h5 text-align:left>Saldo a deber:</h5>
                    <input type="text" name="Saldo_a_Deber" required maxlength="10">
                </div>
                <div class="center-align">
                    <button class="btn green" style="height:30px; line-height: 25px; display:inline-flex; align-items: center;" type="submit" name="submit">Actualizar<i class="material-icons" style="margin-right: 5px;">autorenew</i></button>
                </div>
                </form>
        </div>
    </div>
</body>
</html>