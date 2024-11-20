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
    <!-- esta parte es la barra azul de arriba -->
    <div>
        <nav class="indigo">
            <a href="" class="brand-logo left">
                <img src="media/logoGenerico.png" alt="Aqui va el logo" style="height: 80px;" >
            </a>
            <a href="login.php" class="btn red right" style="height: 65px; line-height: 70px"; >Salir</a>
            <a href="modificarRegistro.php" class="btn indigo right" style="height: 65px; line-height: 70px"; >Cambiar Registro</a>
            <a href="NuevoRegistro.php" class="btn indigo right" style="height:65px; line-height:70px">Nuevo registro</a>
            <a href="index.php"class="btn indigo right" style="height: 65px; line-height: 70px;">Lista de alumnos</a>
        </nav>
    </div>

    <div class="container">
        <!-- metodo DELETERegistro y Titulo de pagina-->
        <div> 
           <header>
                <h2 text-align:left >Eliminar Alumno</h2>
                <br/>
                <br/>
            </header>
            <form method="post" action="Base-Logica/DELETERegistro.php">
                <input type="text" name="No_Alumno" required/>
                <br/>
                <br/>
            <div class="center-align">
                    <button class="btn red"style="height:30px; line-height: 25px; display:inline-flex; align-items: center;"><i class="material-icons" style="margin-right: 5px;">delete</i>Eliminar</button>
                </div>
            </form>    
        </div>

       
        
    </div>

</body>
</html>