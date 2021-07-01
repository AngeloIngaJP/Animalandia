<?php
$connect = mysqli_connect("localhost","root","","veterinariocanino");


if(isset($_POST['Registrar'])) {
    if(!empty($_POST['codigo']) && !empty($_POST['nombre']) && !empty($_POST['sexo'])
    && !empty($_POST['fechanac']) && !empty($_POST['raza']) && !empty($_FILES['foto']['name'])){

        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $sexo = $_POST['sexo'];
        $fechanac = $_POST['fechanac'];
        $raza = $_POST['raza'];

        $foto=$_FILES['foto']['name'];
        $ruta=$_FILES['foto']['tmp_name'];
        $destino='../fotos/'.$foto;
        copy($ruta,$destino);

        $consulta = "INSERT INTO registrocanino(DNI, Nombre, Raza, Genero, FechaNacimiento, Foto) VALUES ('$codigo','$nombre','$raza','$sexo','$fechanac','$destino')";

        $resultado = mysqli_query($connect, $consulta);
        if($resultado){
            ?> 
            <div class="container-message">
            <h3 class="ok">¡Datos registrados correctamente! </h3>
            </div>
            
            <?php
           
            
        }else{
            ?> 
            <div class="container-message">
            <h3 class="bad">¡Ha ocurrido un error!</h3>
            </div>
           
            
            <?php
           
        }


    }else{
        ?> 
        <div class="container-message">
        <h3 class="med">¡Por favor, complete los campos!</h3>
        </div>
        
        <?php  
        
    }

}
?>