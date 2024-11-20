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
    </div>
    <header>
        <h3 text-align:left>Bienvenido</h3>
    </header>
    <div class="container">
        <form action="Base-Logica/LOGEAR.php" method="post">
            <div>
                <h5 text-align:left>Ingresa tu nombre</h5>
                <input type="text" name="Nombre" required maxlength="20">
                <h5 text-align:left>Ingresa tu Apellido</h5>
                <input type="text" name="Apellido" required maxlength="20">
                <h5 text-align:left>Ingresa tu contraseña</h5>
                <input type="password" name="Contraseña" required maxlength="10">
                <br/>
                <br/>
            </div>
            <div class="center-align">    
                <button class="btn green" style="height:30px; line-height: 25px; display:inline-flex; align-items: center;" type="submit" name="submit"><i class="material-icons" style="margin-right: 5px;">account_circle</i>Iniciar sesion</button>
            </div>
        </form>
    </div>  

</body>
</html>