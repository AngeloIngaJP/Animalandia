<?php
$connect = mysqli_connect("localhost","root","","veterinariocanino");



if(isset($_POST['Buscar'])){
    if(!empty($_POST['nombre'])){
        $v2 = $_POST['nombre'];
        //conuslta SQL
        $sql = "SELECT * FROM registrocanino WHERE Nombre LIKE '".$v2."'";
        $result = mysqli_query($connect, $sql);
        //cuantos reultados hay en la busqueda
        $num_resultados = mysqli_num_rows($result);
        echo "<center><p class=disetop>Número de canes encontrados: ".$num_resultados."</p></center>";
        //mostrando informacion de los perros y detalle
        if($num_resultados>=1){
            echo "<div class=container-message>
            <h3 class=ok>Datos encontrados</h3>
             </div>";
    
            for ($i=0; $i <$num_resultados; $i++) {
            $row = mysqli_fetch_array($result); 
            
            echo "<center><div class=can>Can ".($i+1)."</div></center>";

            echo "<div class=resultado>
                    <img src=".$row["Foto"]." alt='foto' class=imgres>
                    <div class=context>
                        <p class=dise>DNI: ".$row["DNI"]."<p>
                        <p class=dise>Nombre: ".$row["Nombre"]."<p>
                        <p class=dise>Raza: ".$row["Raza"]."<p>
                        <p class=dise>Género: ".$row["Genero"]."<p>
                        <p class=dise>Nació el: ".$row["FechaNacimiento"]."<p>
                    </div>
                </div>";
            echo "<div class=espacio></div>"; 
            }
    
        }else{
            echo "<div class=container-message>
            <h3 class=ok>No se encontró ni un perro con el nombre: ".$v2."</h3>
             </div>";
        }
        
    
    
    }else{
    
        echo "<div class=container-message>
        <h3 class=med>¡Por favor, complete el campo!</h3>
        </div>";
        
    }
}

?>