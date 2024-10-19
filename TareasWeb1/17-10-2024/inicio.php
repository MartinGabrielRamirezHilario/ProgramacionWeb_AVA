<?php
include "conexion.php";

$consulta_sql="SELECT * FROM alumno";
$resultado=$conexion->query($consulta_sql);

 $count=mysqli_num_rows($resultado);
 echo "<table border='1'>";
    echo "<tr>";
        echo "<th> Alumnos</th>";
        echo "<th> Numero de cuenta </th>";
        echo "<th> Direccion </th>";
        echo "<th> telefono </th>";
        echo "<th> Correo instirucional </th>";
        echo "<th> Password </th>";
        echo "<th> Fecha_registro </th>";
        echo "<th> Permisos </th>";
    echo "</tr>";

        if ($count>0){
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr>";
                echo "<td>".$row['nombre_usuario']."</td>";
                echo "<td>".$row['no_cuenta']."</td>";
                echo "<td>".$row['direccion']."</td>";
                echo "<td>".$row['telefono']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['password']."</td>";
                echo "<td>".$row['fecha_registro']."</td>";
                echo "<td>".$row['permisos']."</td>";
                echo "</tr>";
            }
        }
?>