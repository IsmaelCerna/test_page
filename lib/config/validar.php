<?php
session_start();
include("setup.php");

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

$selDatos=mysqli_query($con,"SELECT * FROM usuarios WHERE usuario='$usuario' LIMIT 1");
if($datDatos=mysqli_fetch_assoc($selDatos)){
    if($usuario==$datDatos["usuario"] && $clave==$datDatos["clave"]){
        $_SESSION["seguridad"]=1;
        echo "1";
    } else {
        echo "2";
    }
} else {
    echo "2";
}

?>