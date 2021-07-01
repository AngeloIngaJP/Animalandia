<?php

$con = mysqli_connect("localhost", "root", "", "registrousuarios");

$user = $_POST['username'];
$pass = $_POST['passw'];

if (!empty($user) && !empty($pass)) {

    $consulta = "SELECT * FROM registros WHERE username = '$user' and pass = '$pass' and activo = '1'";
    $resultado = mysqli_query($con, $consulta);
    $coincidencia = mysqli_num_rows($resultado);

    

    if ( $coincidencia > 0){

        mysqli_free_result($resultado);
        echo "<script>location.href='../html/panel.html';</script>";

    }else{
        $consultasec = "SELECT * FROM registros WHERE username = '$user' and pass = '$pass' and activo = '0'";
        $resultadosec = mysqli_query($con, $consultasec);
        $coincidenciasec = mysqli_num_rows($resultadosec);

        if ($coincidenciasec > 0){
            echo "<div class=container-message>
        <h3 class=noact><center>Su cuenta no ha sido activada</center></h3>
        <h3 class=noact>Por favor, haga clic en el enlace que se envío a su correo</h3>
        </div>";
        }     
        else{
            echo "<div class=container-message>
            <h3 class=uso>Los datos introducidos no pertenecen a una cuenta</h3>
            </div>";
        }

    }

} else {

    echo "<div class=container-message>
    <h3 class=med>¡Por favor, complete los campos!</h3>
    </div>";

}

mysqli_close($con);

?>