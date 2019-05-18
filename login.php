<?php

$usuario=$_POST['txtUsuarioE'];
$pass=md5($_POST['txtPasswordE']);


$con = new mysqli("localhost","root","","registroestudiantes");

$sql       = "SELECT * FROM estudiante WHERE usuario = '$usuario'";


$resultado = mysqli_query($con,$sql) or die ("<h2>ERROR, INTENTE DE NUEVO</h2><br> Error:".mysqli_error($con));


$band=0;
while ($fila = mysqli_fetch_assoc($resultado)) {
    $band = 1;
}


if($band == 0){

    echo "<script>
                alert('USUARIO NO REGISTRADO');
                window.location= 'index.html'
    </script>";
 
}
else{
    $sql       = "SELECT * FROM estudiante WHERE usuario = '$usuario' and pass = '$pass'";
    $resultado = mysqli_query($con,$sql) or die ("<h2>ERROR, INTENTE DE NUEVO</h2><br> Error:".mysqli_error($con));

    $band=0;
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $band = 1;
         
    }

    if($band == 0){
        echo "<script>
                alert('CONTRASEÑA INCORRECTA');
                window.location= 'index.html'
        </script>";
    }
    else{
        header('Location: principal.html');
    }

}

?>