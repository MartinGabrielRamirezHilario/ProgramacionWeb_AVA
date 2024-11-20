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
            <a href="modificarRegistro.php" class="btn indigo right" style="height: 65px; line-height: 70px"; >Cambiar Registro</a>
            <a href="index.php" class="btn indigo right" style="height: 65px; line-height:70px;">Lista de alumnos</a>
    </div>

    <!-- Aqui se ingresa el nuevo registro -->
    <div>
        <header>
            <h3 text-align:left>Nuevo alumno</h3>
        </header>

        <div class="container">
            <form method="post" action="Base-Logica/INSERTRegistro.php" >
                <div>
                    <h5 text-align:left>Ingresa el nombre:</h5>
                    <input type="text" name="Nombre" required maxlength="20">
                    <h5 text-align:left>Ingresa el apellido:</h5>
                    <input type="text" name="Apellido" required maxlength="20">
                    <h5 text-align:left>Ingresa el numero telefono</h5>
                    <input type="text" name="Telefono" required maxlength="10">
                    <h5 text-align:left>Ingresa la contraseña del alumno:</h5>
                    <input type="text" name="Contraseña" required maxlength="10">
                    <h5 text-align:left>Saldo a Deber:</h5>
                    <input type="text" name="Saldo_a_Deber" required maxlength="10">
                </div>
                <div class="center-align">
                    <br/>
                    <br/>
                    <button class="btn green"style="height:30px; line-height: 25px; display:inline-flex; align-items: center;"> <i class="material-icons" style="margin-right: 5px;">add_circle</i>Registrar</button>
            <!-- <button class="btn green"style="align-items: center;line-height: 25px; display:inline-flex; align-items: center;" type="submit" name="submit" ><i class="material-icons" style="margin-right: 5px;">add</i>Registrar Alumno</button> -->
                </div>
            </form>
        </div>
    </div>
</body>
</html>