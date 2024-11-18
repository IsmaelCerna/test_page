<?php

$con=mysqli_connect('localhost','root','','db_template');
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$sql ="INSERT into usuarios (usuario,clave)
        values('$usuario','$clave')";

        echo mysqli_query($con,$sql);
?>