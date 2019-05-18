<?php

$con = new mysqli("localhost","root","","registroestudiantes");

$nombre=$_POST['txtNombre'];
$apellido=$_POST['txtApellidos'];
$id=$_POST['txtDocumento'];
$telefono=$_POST['txtTelefono'];
$dir=$_POST['txtDireccion'];
$usuario=$_POST['txtUsuario'];
$passwo=md5( $_POST['txtPassword']) ;

mysqli_query($con,"INSERT INTO estudiante (nombre, apellido, id, telefono, direccion, usuario, pass) VALUES ('$nombre ', '$apellido', '$id', '$telefono', '$dir', '$usuario', '$passwo')") or die ("<h2>ERROR, INTENTE DE NUEVO</h2><br> Error:".mysqli_error($con));

echo"
    <h2>REGISTRO CORRECTO</h2>
    
    ";
header('Location: principal.html');
?>