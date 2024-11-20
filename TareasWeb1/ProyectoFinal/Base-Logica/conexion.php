<?php
$host_db="127.0.0.1:3306";
$user_db="root";
$pass_db="12345678910";
$db_name="BaseDeDatosBox";

$conexion=new mysqli($host_db,$user_db,$pass_db,$db_name);
    if ($conexion->connect_error){
        echo"<h1>Mysql no esta realizando las consultas</h1>";
    }else{
        echo"<h2 text-align:left;>Lista de Alumnos</h2>";
    }


?>